#generating database
DROP DATABASE IF EXISTS STUMPED;
CREATE DATABASE STUMPED;
USE STUMPED;

#generating tables
CREATE TABLE USERTYPE (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	TYPE VARCHAR(15)
);

CREATE TABLE USER (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	USERTYPEID INT NOT NULL,
	EMAIL VARCHAR(100) NOT NULL,
	PASSWORD VARCHAR(255),
	ISVERIFIED INT NOT NULL DEFAULT 0,
	UNIQUE (Email),
	FOREIGN KEY (USERTYPEID) REFERENCES USERTYPE(ID)
);

CREATE TABLE EVENT (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	USERTYPEID INT NOT NULL,
	NAME VARCHAR(255),
	STARTTIME VARCHAR(255),
	ENDTIME VARCHAR(255),
	LOCATION VARCHAR(255),
	LOCATIONLINK VARCHAR(255),
	DESCRIPTION VARCHAR(255),
	LINK VARCHAR(255)
);

CREATE TABLE STORY (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	NAME VARCHAR(255),
	TITLE VARCHAR(255),
	QUOTE TEXT,
	STORY TEXT
);

CREATE TABLE CONTACT (
	ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	TITLE VARCHAR(255),
	FIRSTNAME VARCHAR(255),
	LASTNAME VARCHAR(255),
	USERTYPE VARCHAR(255),	
	AMPUTATION VARCHAR(255),
	GENDER VARCHAR(255),
	AGEGROUP VARCHAR(255),
	EMAIL VARCHAR(100),
	PHONENUMBER VARCHAR(100),
	SUBJECT VARCHAR(255),
	MESSAGE TEXT
);

#some initial population
INSERT INTO USERTYPE (TYPE) VALUES ('ADMIN'), ('PROFESSIONAL'), ('PATIENT');

INSERT INTO STORY (
	NAME,
	TITLE,
	QUOTE,
	STORY
	) VALUES (
	'John',
	'I was in so much pain',
	'I wanted to have my leg amputated. I was in so much pain, like someone shot me in the leg. And then I was sent home like nothing happened because it was my second amputation.',
	'John is an amazing and inspiring bilateral amputee who lost his first leg (above knee) 7 years ago due to aneurysm and the second leg due to further peripheral vascular disease. John is such a positive, upbeat men that used to be incredibly active prior the operation and who has decided to keep that going irrespective of any obstacles. John was only given an afternoon to come to terms with the fact that he was going to lose his leg. He went into hospital as he had constant pain in his leg. How he described it, he said it was like "someone has shot me in the leg and the pain was constant and would not go away". John explained that everything sank in only days after the amputation and that for the first ten days he did not want to look at his stump – he couldn&#39;t cope with it. He said he was particular grateful to his OT that has made his journey so much more bearable and got to know him even when he went home. He felt that he wasn&#39;t alone. The surgeon who has done the operation was calling him every so often at home to make sure that he is well and coping fine. Despite that, there was no mention of counselling in the hospital or at home. John was lucky to have his wife by his side and it was decided early on that together they will soldier on and not to give up. Although she was a strong person, his wife remembers that however came to see John in hospital, be it doctors, OT&#39;s, nurses, etc, never actually asked her how she was and how she was coping with it al.  John found that when he had the second amputation, although he had experienced this before and had knowledge about the system, becoming bilateral amputee was a shock to the system. And not necessarily because of the amputation itself, because he was at peace with the fact that it was inevitable, The great support of the OT was not there and the new person didn&#39;t have or take the time to get to know John and kept on telling him that her "caseload" was "heavy". And that made John feel like a number. John had been discharged from the hospital in a short period and left to his own devices. About 6 months later he received the shower chair that he was asking for even before the amputation. And although he is strong and positive, he now felt alone. He was looking forward for the DN to visit twice daily as that was giving him a chance to see a new face. It was such a difficult time and such a contradiction in terms of the support he initially received. It felt almost as he went back in time and all the support and assistance had been taken away. No one seemed to care once he was at home. They weren&#39;t able to even direct him to anyone. It was at the rehabilitation centre that he was introduced to a local charity by another member and he started coming there. And this has transformed his life. He now feels that he has a purpose in life. He also said that the thing he feels he would have found extremely helpful was talking to amputees ahead of time and see that there is hope and life doesn&#39;t stop there. He also said that he recognises how lucky he is, as some of his friends have slipped in depression due to sedentary daily life and lack of activity. He puts in down to the isolation.'
	), (
	'Marie',
	'I&#39;ve lost both legs due to diabetes',
	'I&#39;ve lost both legs due to diabetes. I couldn&#39;t rely on my husband, but my daughter and grandson were there to help. I wish I had someone to talk to, someone to talk to, someone that has been through the same thing. But I had to go out on my own and find help.',
	'Marie had undergone two amputations. She sadly lost both her legs below the knee due to complications of diabetes. The first amputation was carried out after several tests were conducted on her left leg. She was made aware of the need for amputation surgery by her consultant and only had the weekend to mentally prepare for what was to come. During the weekend, Marie had the company and support of her family as well as the other patients in the ward. The pain took a toll in Marie&#39;s day to day life as she was not able to complete normal day to day tasks such as going to the toilet and standing for long periods of time. After surgery Marie faced several practical issues. Her stump started blistering and as a result she was forced to be in a wheelchair until her stump fully healed. This completely restricted her independence. From time to time her stump is sore and occasionally the size becomes increased due to rubbing against the artificial leg. This leads to Marie returning to the rehabilitation centre to make adaptations to her artificial leg. Although faced with these issues Marie was confident in the help the centre offered whenever she required it. She was very determined in getting out of the house and several practical issues related to her reintegration to society were resolved when she attended for example physio which enabled her to socialise helping her cope as she saw that she was not alone. Swimming and attending the Gym were two other coping mechanisms that helped Marie to become more active and socialise with others.  Marie realised that swimming posed another practical issue, being top heavy, however this didn&#39;t stop Marie and she worked with coaches to find a solution to her problem. She is now able to swim 60 lengths with her maximum achievement being 120! When arriving home her daughter and grandsons offered help when she required, however her husband was not too good at helping. Marie therefore needed to be proactive and arrange for her own transport to the rehab centre organising a request for an ambulance and then having to arrange her own transport. During the sessions in the rehab centre she viewed an advertisement for a charity that held gatherings with fellow amputees. Eventually she lost her other leg as when arriving home from her first amputation she noticed her toes "going" and was already prepared to lose the other leg as the pain was so excruciating before amputation she did not want to go through that again.'
	), (
	'Kate',
	'My family distanced themselves after my amputation',
	'My family distanced themselves after my amputation. I was practically housebound. I just wanted people to know that I am the same person, I just lost my leg, not my life. Humour was my way of coping.',
	'Kate had her left leg amputated due to CRPS Type 2 (Complex Regional Pain Syndrome). Before Kate&#39;s amputation she had undergone several operations on her left foot. Her toes had a condition called "hammer foot" and needed pins to be surgically inserted to straighten them in order to enable Kate to walk without pain and discomfort. Following this operation, Kate underwent a second operation where the surgeon cut the tips of the toes in an attempt to prevent her foot from regression to its initial condition, despite these efforts Kate&#39;s toes returned to normal. This in turn lead Kate to start walking on her heel for the next five years. Consequently, Kate&#39;s heels "crumbled" and required surgery to repair. At this point her bones were fused together and an extra surgical procedure was required to remove the sutures as her body rejected the bone. It was in a later consultation that Kate discovered she had CRPS Type 2 which was behind the cause of the immense pain in her left leg as well as the ulcers that appeared on her left foot and leg. The pain had taken a toll on her life as she was unable to even walk or leave her house to go grocery shopping. Although Kate was referred to a pain clinic they were unable to manage her pain. Therefore, Kate was given two options by her consultant, either continue to continue to ‘heel walk&#39; and eventually have to live in a wheelchair and in pain or have an amputation. Kate chose to have an amputation as she saw it as the only chance of getting a better quality of life. Before her operation, the consultant confirmed that she would have some counselling to address her concerns, however the hospital did not offer any support. After her operation, Kate woke up shocked and attempted to come to terms with what had just happened. Her family instantly distanced themselves and the only support offered throughout her stay at hospital was the rehab centre where she had the support of a specialised counsellor which "(…) was brilliant." As well as groups of amputees she was able to speak to and share experiences with, helping her feel that she was not alone, "You had someone to talk about it." Kate faced several difficult psychological and physical challenges after her operation. Her family and friends "(…) started disappearing." So, she was left alone whilst still visited by her friends, she felt that they would be sceptical and too uncomfortable to speak with her. When Kate retuned home she "(…) was left by myself" and had no one to support her. With no adaptations made to her home she remained housebound for 6 months after her operation. On the occasions that her prosthesis was being repaired and she was wheelchair bound, she was be unable to leave her house.'
	), (
	'Ben',
	'It was a really difficult time',
	'I didn&#39;t  realise the extent of it until I got to the ward, it was a really difficult time.',
	'Ben had a very traumatic experience. After going out with his friends he decided to take a short cut and whilst crossing the rail tracks he got electrocuted and lost consciousness. Upon waking up, he was unable to move his legs and described them as being "on fire, literally" so he crawled to his backpack and called for an ambulance. He stayed in ICU for a month where he had some close calls where he deteriorated very quickly due to the amount of surgical procedures he was undergoing to repair his legs. He was eventually transferred to a ward for a period of three months where he had access to a counsellor. During his stay at the ward, Ben attended physio at West Mark where he found more specialised help from a Counsellor who assisted and supported him in his mental journey to recovery. Unfortunately there was only a limited time to attend due to the case load the psychologist had. Ben spent two years on a wheelchair gaining upper body strength until he was able to try using a prosthesis. This presented several practical issues such as having to transfer from his chair to the bathroom, having aids to help him pick up items from the floor, having a supra pubic catheter inserted as well as a stoma due to the urethral catheter causing a urinary tract infection every couple of weeks and a delayed response from the NHS in removing the catheter when it was time causing Ben to keep it for an extra 6 months than what was needed (staying in for a total of 12 months). When Ben was ready to utilise the prosthesis, he faced a major practical issue which was his bone on his stump rubbing against the artificial leg, this in turn brought Ben back to hospital to shave his bone to accommodate the artificial leg. The accident affected Ben&#39;s family immensely as having to be called to the hospital every time Ben deteriorated to say their goodbyes, after being moved to the Barton ward and seeing Ben low at times, however his family offered a great level of emotional support.'
	);

INSERT INTO EVENT (
	USERTYPEID,
	NAME,
	STARTTIME,
	ENDTIME,
	LOCATION,
	LOCATIONLINK,
	DESCRIPTION,
	LINK
	) VALUES (
	'3',
	'Google I/O',
	'Tue May 13 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Tue May 13 2018 12:00:00 GMT+0100 (GMT Summer Time)',
	'Google IO Head Quarters',
	"https://goo.gl/GJ7XEL",
	'Google I/O (simply I/O) is an annual developer conference held by Google in San Francisco, California.',
	'https://events.google.com/io/explore/'	
	), (
	'3',
	'Microsoft Convergence',
	'Sat April 28 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Sat April 28 2018 12:00:00 GMT+0100 (GMT Summer Time)',
	'Microsoft IO Head Quarters',
	"https://goo.gl/GJ7XEL",
	'Google I/O (simply I/O) is an annual developer conference held by Google in San Francisco, California.',
	'https://events.google.com/io/explore/'	
	), (
	'3',
	'Microsoft Build Developer Conference',
	'Mon June 7 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Sun June 17 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Microsoft IO Head Quarters',
	"https://goo.gl/GJ7XEL",
	'Google I/O (simply I/O) is an annual developer conference held by Google in San Francisco, California.',
	'https://events.google.com/io/explore/'	
	), (
	'2',
	'Apple Special Event',
	'Thu July 19 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Thu July 19 2018 12:00:00 GMT+0100 (GMT Summer Time)',
	'Apple IO Head Quarters',
	"https://goo.gl/GJ7XEL",
	'Google I/O (simply I/O) is an annual developer conference held by Google in San Francisco, California.',
	'https://events.google.com/io/explore/'	
	), (
	'2',
	'Apple Keynote',
	'Thu April 19 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Thu April 19 2018 12:00:00 GMT+0100 (GMT Summer Time)',
	'Apple IO Head Quarters',
	"https://goo.gl/GJ7XEL",
	'Google I/O (simply I/O) is an annual developer conference held by Google in San Francisco, California.',
	'https://events.google.com/io/explore/'	
	), (
	'2',
	'Chrome Developer Summit',
	'Mon December 3 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Fri December 7 2018 00:00:00 GMT+0100 (GMT Summer Time)',
	'Chrome IO Head Quarters',
	"https://goo.gl/GJ7XEL",
	'Google I/O (simply I/O) is an annual developer conference held by Google in San Francisco, California.',
	'https://events.google.com/io/explore/'	
	);	