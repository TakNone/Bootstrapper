# InputPrivacyRule

**Description** : *Privacy rules indicate who can or can't do something and are specified by a PrivacyRule, and its input counterpart InputPrivacyRule*

**Layer** : 211

```tl
inputPrivacyValueAllowContacts#d09e07b = InputPrivacyRule;
inputPrivacyValueAllowAll#184b35ce = InputPrivacyRule;
inputPrivacyValueAllowUsers#131cc67f users:Vector<InputUser> = InputPrivacyRule;
inputPrivacyValueDisallowContacts#ba52007 = InputPrivacyRule;
inputPrivacyValueDisallowAll#d66b66c9 = InputPrivacyRule;
inputPrivacyValueDisallowUsers#90110467 users:Vector<InputUser> = InputPrivacyRule;
inputPrivacyValueAllowChatParticipants#840649cf chats:Vector<long> = InputPrivacyRule;
inputPrivacyValueDisallowChatParticipants#e94f0f86 chats:Vector<long> = InputPrivacyRule;
inputPrivacyValueAllowCloseFriends#2f453e49 = InputPrivacyRule;
inputPrivacyValueAllowPremium#77cdc9f1 = InputPrivacyRule;
inputPrivacyValueAllowBots#5a4fcce5 = InputPrivacyRule;
inputPrivacyValueDisallowBots#c4e57915 = InputPrivacyRule;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputPrivacyValueAllowContacts**](constructor/inputPrivacyValueAllowContacts) | Allow only contacts |
| [**inputPrivacyValueAllowAll**](constructor/inputPrivacyValueAllowAll) | Allow all users |
| [**inputPrivacyValueAllowUsers**](constructor/inputPrivacyValueAllowUsers) | Allow only certain users |
| [**inputPrivacyValueDisallowContacts**](constructor/inputPrivacyValueDisallowContacts) | Disallow only contacts |
| [**inputPrivacyValueDisallowAll**](constructor/inputPrivacyValueDisallowAll) | Disallow all |
| [**inputPrivacyValueDisallowUsers**](constructor/inputPrivacyValueDisallowUsers) | Disallow only certain users |
| [**inputPrivacyValueAllowChatParticipants**](constructor/inputPrivacyValueAllowChatParticipants) | Allow only participants of certain chats |
| [**inputPrivacyValueDisallowChatParticipants**](constructor/inputPrivacyValueDisallowChatParticipants) | Disallow only participants of certain chats |
| [**inputPrivacyValueAllowCloseFriends**](constructor/inputPrivacyValueAllowCloseFriends) | Allow only close friends » |
| [**inputPrivacyValueAllowPremium**](constructor/inputPrivacyValueAllowPremium) | Allow only users with a Premium subscription », currently only usable for inputPrivacyKeyChatInvite |
| [**inputPrivacyValueAllowBots**](constructor/inputPrivacyValueAllowBots) | Allow bots and mini apps |
| [**inputPrivacyValueDisallowBots**](constructor/inputPrivacyValueDisallowBots) | Disallow bots and mini apps |