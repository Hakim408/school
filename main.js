window.addEventListener('scroll', ()=>{
    document.querySelector('nav').classList.toggle
    ('window-scroll', window.scrollY > 0)
})


const faqs= document.querySelectorAll('.faq');
faqs.forEach(faq =>{
    faq.addEventListener('click',()=>{
        faq.classList.toggle('open');

        const icon = faq.querySelectorAll('.faq_icon i');
        if(icon.className==='uil uil-plus'){
            icon.className= "uil uil-minus"
        }else{
            icon.className= 'uil uil-plus'
        }
    })
})


const menu = document.querySelector(".nav_menu");
const menuBtn = document.querySelector("#open-menu-btn");
const closeBtn = document.querySelector("#close-menu-btn");


menuBtn.addEventListener('click', ()=>{
    menu.style.display = "flex";
    closeBtn.style.display = "inline-block";
    menuBtn.style.display = "none";
})


const closeNav = () => {
    menu.style.display = "none";
    closeBtn.style.display = "none";
    menuBtn.style.display = "inline-block";
}

closeBtn.addEventListener('click', closeNav)



// //  for chatbot
// function talk(){
//     var know = {
//     "Who are you" : "Hello, Codewith_random here ",
//     "How are you" : "Good :)",
//     "What can i do for you" : "Please Give us A Follow & Like.",
//     "Your followers" : "I have my family of 5000 members, i don't have follower ,have supportive Famiy ",
//     "ok" : "Thank You So Much ",
//     "Bye" : "Okay! Will meet soon.."
//     };
//     var user = document.getElementById('userBox').value;
//     document.getElementById('chatLog').innerHTML = user + "<br>";
//     if (user in know) {
//     document.getElementById('chatLog').innerHTML = know[user] + "<br>";
//     }else{
//     document.getElementById('chatLog').innerHTML = "Sorry,I didn't understand <br>";
//     }
//     }


// Set to keep track of answered questions
// const answeredQuestions = new Set();

// function talk() {
//     var know = {
//         // Greetings
//         "hi": "Hello! How can I assist you today?",
//         "hello": "Hi there! How can I help you?",
//         "hey": "Hey! What would you like to know?",
//         "good morning": "Good morning! How can I assist you?",
//         "good afternoon": "Good afternoon! How can I help you?",
//         "good evening": "Good evening! What can I do for you?",
    
//         // General questions
//         "who are you": "I am your friendly school assistant chatbot.",
//         "how are you": "I'm just a chatbot, but I'm here to help you!",
//         "what can i do for you": "You can ask me anything about our school.",
//         "your followers": "I don't have followers, but I'm here to assist you with any school-related questions.",
//         "ok": "Thank you!",
//         "bye": "Goodbye! Have a great day!",
//         "thank you": "You're welcome!",
//         "thanks": "You're welcome!",
    
//         // School-related questions
//         "what is your school name": "Our school is XYZ High School.",
//         "what grade are you in": "I am in the 10th grade.",
//         "who is your principal": "Our principal is Mr. John Doe.",
//         "what subjects do you study": "I study Math, Science, English, History, and Physical Education.",
//         "when does your school start": "Our school starts at 8:00 AM.",
//         "when does your school end": "Our school ends at 3:00 PM.",
//         "what is the school address": "The school is located at 123 Main St, Anytown, USA.",
//         "what are the school hours": "The school operates from 8:00 AM to 3:00 PM, Monday to Friday.",
//         "what is the school's phone number": "You can contact the school at (123) 456-7890.",
//         "how can I contact the school": "You can reach us by phone at (123) 456-7890 or email us at info@xyzschool.com.",
//         "what is the school's email address": "Our email address is info@xyzschool.com.",
//         "what is the school website": "Our website is www.xyzschool.com.",
//         "what extracurricular activities are offered": "We offer a variety of extracurricular activities including sports, music, drama, and art clubs.",
//         "does the school have a cafeteria": "Yes, we have a cafeteria that serves breakfast and lunch.",
//         "what is the school mascot": "Our school mascot is the Eagle.",
//         "what sports teams does the school have": "We have teams for football, basketball, soccer, and volleyball.",
//         "is there a school uniform": "Yes, students are required to wear a uniform consisting of a white shirt and navy pants or skirt.",
//         "what are the school holidays": "The school holidays include all major national holidays, winter break, spring break, and summer vacation.",
//         "what is the school's mission statement": "Our mission is to provide a high-quality education that prepares students for college and future careers.",
//         "what is the admission process": "The admission process includes submitting an application, attending an interview, and providing previous school records.",
//         "are there any school fees": "Yes, there are tuition fees and additional fees for extracurricular activities and school supplies.",
//         "what transportation options are available": "We offer school bus services for students living within a certain radius of the school."
//     };
//     var user = document.getElementById('userBox').value.toLowerCase().trim(); // Convert user input to lowercase and trim
//     document.getElementById('userBox').value = ''; // Clear the input box

//     // Clear the previous response
//     document.getElementById('chatLog').innerHTML = '';

//     // Check if the question has already been answered
//     if (answeredQuestions.has(user)) {
//         document.getElementById('chatLog').innerHTML = "You've already asked that. Please ask something else.<br>";
//         return;
//     }

//     var response = getResponse(user, know);

//     document.getElementById('chatLog').innerHTML = response + "<br>"; // Display the response

//     // Add the question to the set of answered questions
//     answeredQuestions.add(user);
// }

// // Function to get the response based on user input
// function getResponse(userInput, dataset) {
//     // Check for exact match
//     if (userInput in dataset) {
//         return dataset[userInput];
//     }

//     // Check for partial matches
//     for (var key in dataset) {
//         if (userInput.includes(key) || key.includes(userInput)) {
//             return dataset[key];
//         }
//     }

//     // If no match is found, return a generic response
//     return generateGenericResponse(userInput);
// }

// // Function to generate a generic response
// function generateGenericResponse(userInput) {
//     var responses = [
//         "That's interesting! Tell me more.",
//         "I see. Can you elaborate?",
//         "Why do you ask that?",
//         "I'm not sure about that. Can you ask something else?",
//         "That's a good question. What do you think?",
//         "I don't have the answer to that right now."
//     ];

//     // Return a random response from the responses array
//     return responses[Math.floor(Math.random() * responses.length)];
// }





var know = {
    // Greetings
    "hi": "Hello! How can I assist you today?",
    "hello": "Hi there! How can I help you?",
    "hey": "Hey! What would you like to know?",
    "good morning": "Good morning! How can I assist you?",
    "good afternoon": "Good afternoon! How can I help you?",
    "good evening": "Good evening! What can I do for you?",

    // General questions
    "who are you": "I am your friendly school assistant chatbot.",
    "how are you": "I'm just a chatbot, but I'm here to help you!",
    "what can i do for you": "You can ask me anything about our school.",
    "your followers": "I don't have followers, but I'm here to assist you with any school-related questions.",
    "ok": "Thank you!",
    "bye": "Goodbye! Have a great day!",
    "thank you": "You're welcome!",
    "thanks": "You're welcome!",

    // School-related questions
    "what is your school name": "Our school is XYZ High School.",
    "what grade are you in": "I am in the 10th grade.",
    "who is your principal": "Our principal is Mr. John Doe.",
    "what subjects do you study": "I study Math, Science, English, History, and Physical Education.",
    "when does your school start": "Our school starts at 8:00 AM.",
    "when does your school end": "Our school ends at 3:00 PM.",
    "what is the school address": "The school is located at 123 Main St, Anytown, USA.",
    "what are the school hours": "The school operates from 8:00 AM to 3:00 PM, Monday to Friday.",
    "what is the school's phone number": "You can contact the school at (123) 456-7890.",
    "how can I contact the school": "You can reach us by phone at (123) 456-7890 or email us at info@xyzschool.com.",
    "what is the school's email address": "Our email address is info@xyzschool.com.",
    "what is the school website": "Our website is www.xyzschool.com.",
    "what extracurricular activities are offered": "We offer a variety of extracurricular activities including sports, music, drama, and art clubs.",
    "does the school have a cafeteria": "Yes, we have a cafeteria that serves breakfast and lunch.",
    "what is the school mascot": "Our school mascot is the Eagle.",
    "what sports teams does the school have": "We have teams for football, basketball, soccer, and volleyball.",
    "is there a school uniform": "Yes, students are required to wear a uniform consisting of a white shirt and navy pants or skirt.",
    "what are the school holidays": "The school holidays include all major national holidays, winter break, spring break, and summer vacation.",
    "what is the school's mission statement": "Our mission is to provide a high-quality education that prepares students for college and future careers.",
    "what is the admission process": "The admission process includes submitting an application, attending an interview, and providing previous school records.",
    "are there any school fees": "Yes, there are tuition fees and additional fees for extracurricular activities and school supplies.",
    "what transportation options are available": "We offer school bus services for students living within a certain radius of the school."
};

// Function to handle user input and display responses
// Function to handle user input and display responses
function talk() {
    var user = document.getElementById('userBox').value.trim(); // Trim whitespace
    document.getElementById('userBox').value = ''; // Clear the input box

    // If user input is empty, do nothing
    if (user === '') return;

    var chatLog = document.getElementById('chatLog');

    // Display the user's question
    var userDiv = document.createElement('div');
    userDiv.className = 'userText';
    userDiv.innerHTML = "<strong>You:</strong> " + user;
    chatLog.appendChild(userDiv);

    var response = getResponse(user.toLowerCase(), know);

    // Display the chatbot's response
    var botDiv = document.createElement('div');
    botDiv.className = 'botText';
    botDiv.innerHTML = "<strong>Bot:</strong> " + response;
    chatLog.appendChild(botDiv);

    // Scroll to the bottom of the chat log
    chatLog.scrollTop = chatLog.scrollHeight;
}


// Function to get the response based on user input
// Function to get the response based on user input
function getResponse(userInput, dataset) {
    // Check for exact match
    if (userInput in dataset) {
        return dataset[userInput];
    }

    // Check for partial matches only if user input is a single word
    if (userInput.split(' ').length === 1) {
        for (var key in dataset) {
            if (key.toLowerCase().includes(userInput.toLowerCase())) {
                return dataset[key];
            }
        }
    }

    // If no match is found, return a generic response
    return generateGenericResponse(userInput);
}


// Function to generate a generic response
function generateGenericResponse(userInput) {
    var responses = [
        "That's interesting! Tell me more.",
        "I see. Can you elaborate?",
        "Why do you ask that?",
        "I'm not sure about that. Can you ask something else?",
        "That's a good question. What do you think?",
        "I don't have the answer to that right now."
    ];

    // Return a random response from the responses array
    return responses[Math.floor(Math.random() * responses.length)];
}



// dashbaord 
const sideMenu = document.querySelector('aside');
const menuBtn1 = document.getElementById('menu-btn1');
const closeBtn1 = document.getElementById('close-btn1');

const darkMode = document.querySelector('.dark-mode');

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
});

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
});

darkMode.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode-variables');
    darkMode.querySelector('span:nth-child(1)').classList.toggle('active');
    darkMode.querySelector('span:nth-child(2)').classList.toggle('active');
})


