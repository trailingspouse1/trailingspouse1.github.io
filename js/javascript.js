

    var Quotation=new Array() 
    
    Quotation[0] = "People always ask me who helped me get started with my social media strategy. Diana did! <br><br> &mdash;Julia Namour, Jewelry Designer";
    Quotation[1] = "Diana helped me launch an online concept. What sets her apart from others is she has a foundation in multiple medias, which allows her to explain the WHY.<br><br> &mdash;Ingela Johnasson, Artist";
    Quotation[2] = "Diana has a way of explaining things in clear manner. Diana has showed me how to keep my marketing costs low, while effectively using the available tools to reach my potential audience.<br><br>&mdash;Liza Rowan, Holistic Nutritionist";
    Quotation[3] = "Diana always puts in that little tip that will make the difference. Without hesitation I would recommend her to anyone requiring guidance and expertise on social media.<br><br> &mdash;Sabine Seillière, Entrepreneur"; 
    Quotation[4] = "Diana is an exemplary project manager with very strong organizational skills. Add to that her interpersonal skills and an ever-cheerful attitude -- Diana gets things done!<br><br>&mdash;Tom Richards, Principle Developer";
    Quotation[5] = "Diana was hands down one of the best project managers I have ever encountered. She would be a terrific asset to any team.<br><br> &mdash;Brandy Mann, Social Media Specialist";
       

    // ======================================
    // Do not change anything below this line
    // ======================================
    var Q = Quotation.length;
    var whichQuotation=Math.round(Math.random()*(Q-1));
    function showQuotation() {
    document.write(Quotation[whichQuotation]);
    }
  