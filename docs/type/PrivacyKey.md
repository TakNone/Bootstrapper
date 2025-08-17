# PrivacyKey

**Description** : *Privacy keys together with privacy rules » indicate what can or can't someone do and are specified by a PrivacyKey constructor, and its input counterpart InputPrivacyKey*

**Layer** : 211

```tl
privacyKeyStatusTimestamp#bc2eab30 = PrivacyKey;
privacyKeyChatInvite#500e6dfa = PrivacyKey;
privacyKeyPhoneCall#3d662b7b = PrivacyKey;
privacyKeyPhoneP2P#39491cc8 = PrivacyKey;
privacyKeyForwards#69ec56a3 = PrivacyKey;
privacyKeyProfilePhoto#96151fed = PrivacyKey;
privacyKeyPhoneNumber#d19ae46d = PrivacyKey;
privacyKeyAddedByPhone#42ffd42b = PrivacyKey;
privacyKeyVoiceMessages#697f414 = PrivacyKey;
privacyKeyAbout#a486b761 = PrivacyKey;
privacyKeyBirthday#2000a518 = PrivacyKey;
privacyKeyStarGiftsAutoSave#2ca4fdf8 = PrivacyKey;
privacyKeyNoPaidMessages#17d348d2 = PrivacyKey;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**privacyKeyStatusTimestamp**](constructor/privacyKeyStatusTimestamp) | Whether we can see the last online timestamp of this user.Note that if we decide to hide our exact last online timestamp to someone (i.e., users A, B, C, or all users) and we do not have a Premium subscription, we won't be able to see the exact last online timestamp of those users (A, B, C, or all users), even if those users do share it with us.If those users do share their exact online status with us, but we can't see it due to the reason mentioned above, the by_me flag of userStatusRecently, userStatusLastWeek, userStatusLastMonth will be set |
| [**privacyKeyChatInvite**](constructor/privacyKeyChatInvite) | Whether the user can be invited to chats |
| [**privacyKeyPhoneCall**](constructor/privacyKeyPhoneCall) | Whether the user accepts phone calls |
| [**privacyKeyPhoneP2P**](constructor/privacyKeyPhoneP2P) | Whether P2P connections in phone calls with this user are allowed |
| [**privacyKeyForwards**](constructor/privacyKeyForwards) | Whether messages forwarded from the user will be anonymously forwarded |
| [**privacyKeyProfilePhoto**](constructor/privacyKeyProfilePhoto) | Whether the profile picture of the user is visible |
| [**privacyKeyPhoneNumber**](constructor/privacyKeyPhoneNumber) | Whether the user allows us to see his phone number |
| [**privacyKeyAddedByPhone**](constructor/privacyKeyAddedByPhone) | Whether this user can be added to our contact list by their phone number |
| [**privacyKeyVoiceMessages**](constructor/privacyKeyVoiceMessages) | Whether the user accepts voice messages |
| [**privacyKeyAbout**](constructor/privacyKeyAbout) | Whether people can see your bio |
| [**privacyKeyBirthday**](constructor/privacyKeyBirthday) | Whether the user can see our birthday |
| [**privacyKeyStarGiftsAutoSave**](constructor/privacyKeyStarGiftsAutoSave) | Whether received gifts will be automatically displayed on our profile |
| [**privacyKeyNoPaidMessages**](constructor/privacyKeyNoPaidMessages) | NOTHING |