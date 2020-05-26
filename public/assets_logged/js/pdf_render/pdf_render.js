//getting the link of the pdf file using DOM
var div = document.getElementById("dom-target");
var url = div.textContent;

let pdfDoc = null,
  pageNum = 1,
  pageIsRendering = false,
  pageNumIsPending = null;

const scale = 3,
  canvas = document.querySelector('#pdf-render'),
  ctx = canvas.getContext('2d');

// Render the page
const renderPage = num => {
  pageIsRendering = true;

  // Get page
  pdfDoc.getPage(num).then(page => {
    // Set scale
    const viewport = page.getViewport({ scale });
    canvas.height = viewport.height;
    canvas.width = viewport.width;

    const renderCtx = {
      canvasContext: ctx,
      viewport
    };

    page.render(renderCtx).promise.then(() => {
      pageIsRendering = false;

      if (pageNumIsPending !== null) {
        renderPage(pageNumIsPending);
        pageNumIsPending = null;
      }
    });

    // Output current page
    document.querySelector('#page-num-top').textContent = num;
    document.querySelector('#page-num-bottom').textContent = num;
  });
};

// Check for pages rendering
const queueRenderPage = num => {
  if (pageIsRendering) {
    pageNumIsPending = num;
  } else {
    renderPage(num);
  }
};

// Show Prev Page
const showPrevPage = () => {
  if (pageNum <= 1) {
    return;
  }
  pageNum--;
  queueRenderPage(pageNum);
};
// Show Prev Page
const showMinusFivePage = () => {
  if (pageNum <= 5) {
    return;
  }
  pageNum=pageNum-5;
  queueRenderPage(pageNum);
};

// Show Next Page
const showNextPage = () => {
  if (pageNum >= pdfDoc.numPages) {
    return;
  }
  pageNum++;
  queueRenderPage(pageNum);
};
// Show Next Page
const showPlusFivePage = () => {
  if (pageNum >= pdfDoc.numPages-5) {
    return;
  }
  pageNum=pageNum+5;
  queueRenderPage(pageNum);
};


// Get Document
pdfjsLib
  .getDocument(url)
  .promise.then(pdfDoc_ => {
    pdfDoc = pdfDoc_;

    document.querySelector('#page-count-top').textContent = pdfDoc.numPages;
    document.querySelector('#page-count-bottom').textContent = pdfDoc.numPages;

    renderPage(pageNum);
  })
  .catch(err => {
    // Display error
    const div = document.createElement('div');
    div.className = 'error';
    div.appendChild(document.createTextNode(err.message));
    document.querySelector('body').insertBefore(div, canvas);
    // Remove top bar
    document.querySelector('.top-bar').style.display = 'none';
  });

// Button Events
document.querySelector('#prev-page-top').addEventListener('click', showPrevPage);
document.querySelector('#next-page-top').addEventListener('click', showNextPage);
document.querySelector('#minus-five-page-top').addEventListener('click', showMinusFivePage);
document.querySelector('#plus-five-page-top').addEventListener('click', showPlusFivePage);

document.querySelector('#prev-page-bottom').addEventListener('click', showPrevPage);
document.querySelector('#next-page-bottom').addEventListener('click', showNextPage);
document.querySelector('#minus-five-page-bottom').addEventListener('click', showMinusFivePage);
document.querySelector('#plus-five-page-bottom').addEventListener('click', showPlusFivePage);
