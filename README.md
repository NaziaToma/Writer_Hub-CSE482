# Proposal for Writing Platform Development
### Project name: Writer’s Hub 
#### Group: 04

**Submitted by:**\
Nazia Tabassum Toma - 1721536042\
Jarin Tasnim Oyeshi - 1712360642\
Mir Sadia Afrin - 1712366642\
Hafizur Rahaman - 1310795042

***Introduction***\
This is a proposal of development of a universal digital portal for writer’s resources. Where they have diverse skill sets, availability, employability that equally caters to diverse requirements from readers of all categories. This writer’s hub contains great ideas, experience, visualization and thoughts. Here the writer can exchange their views and feelings. They can develop their personal work on interesting and challenging projects at their own pace from any corner of the world. In this Hub we believe that our users shouldn't worry about anything except their creative work.

***Background and Product Context***<br/>
Writing is one of the most important and popular things that people do all over the world. Starting from story and poem writing to blogs on daily affairs, it is the most popular act people choose to do for expressing their feelings, sharing their thoughts, raising their voices every day. Nowadays, so many social platforms have been created so that every thought can reach people all around the world.
Starting from social media to blog websites, people write a lot daily about their daily and social lives. Sites like medium.com, wattpat.com, fictionpress.com etc. These sites are very popular for writers all over the world right now. Millions of people write posts everyday on those sites on various topics like daily affairs, fictions, science, math, technology, stories, poems, daily news, short stories, novels, business affairs, arts etc. These sites have made it easier for the writers to reach people. So many writers do freelancing jobs also. So many writers got writing jobs also on various platforms.
Our website has so much similarity to those platforms. People can write anything they want, on any topic. The way it is better that, writers’ hub is going to be very much user friendly. It is very important that the site connects to the people and so that this has a better UI and UX Design and users can easily become used to this. There will be easy to use features. Writers can buy and sell their writings; for that, there will be a premium option.
Thus, our vision is to make things easier to connect to the people and reach them by their writings. It has a big opportunity to show their talents. And this site will ensure that.

***User Story***

**Use Case 1:**\
Mr. Humayun is a writer. He used to write story books but nowadays with the advancement of technology he is thinking about publishing his writings on an online platform.
- He will create an account on Writer's Hub website. He will post his stories on the website & also make his stories premium for earning money. 

**Use Case 2:**\
Mr. Humayun loves to read poems & fiction.He is looking for a good online platform for reading free poems & fictions. 

- Search categories in Writer’s Hub site. He will find writings according to his taste.
- He can also read premium writings after paying for that content.

**Use Case 3:**\
Mr. Humayun writes articles on Facebook. He is looking for a platform where he can post writings and organize them. He will-

- Post in Writer’s Hub site.

- Add, edit, delete new writings.

**Use Case 4:**

Mr. Humayun is a programmer. Recently he has started a YouTube channel. He is looking for a writing platform where he can write tech related articles & share it with viewers for better understanding. He will- 

- Create a profile on Writer’s Hub site.

- Select technology category & post his article here.

***Use Case Diagram:***


![alt text](https://raw.githubusercontent.com/NaziaToma/Writer_Hub-CSE482/main/Images/final.png)

***Solution Description***

**Architecture**
Central DB will receive requests from users who want to see articles on the website.They can find articles from categories. There will be a user sign up page where new users can create their profile and those information will be stored in the database. If anyone gives the wrong password then login error will be shown. Existing users can post articles & modify existing posts. Everything will be stored in the database. Users can also leave their comments on the articles. 
![alt text](https://raw.githubusercontent.com/NaziaToma/Writer_Hub-CSE482/main/Images/system%20architecture.jpg)

For the frontend, we will be using HTML, CSS, JavaScript, and Bootstrap. Bootstrap’s responsive CSS adjusts to phones, tablets, and desktops.  It also gives a more premium user interface and smoother experience.

![alt text](https://raw.githubusercontent.com/NaziaToma/Writer_Hub-CSE482/main/Images/logo1.jpg)

Credential information will use a MySQL DB & PHP will be used as the backend of the website.

![alt text](https://raw.githubusercontent.com/NaziaToma/Writer_Hub-CSE482/main/Images/logo2.jpg)

***Front-end plan***<br/>
A total of 8 page-templates in plan (as of November 11, 2020)
1. Homepage
2. Sign up page
3. Login page
4. Admin dashboard
5. Writer dashboard
6. Article Page
7. Card payment gateway page
8. Writer Profile 
***Back end development*** <br/>
a. *Account Creating, Password Recover:*
- Sign up form
- Login
- Facebook login (Phase 2)
- Google login (Phase 2)
- Forgot Password
- MySQL Database\

b. *Profile Management:*
- Writers’ Profile\

c. *Searching facility:*
- Category based\
      
d. *Dashboard:*
- Admin dashboard
- Writer dashboard \

e. *Payment gateway:* 
- Payment using VISA Card or Mastercard









