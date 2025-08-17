# UserStatus

**Description** : *User online status*

**Layer** : 211

```tl
userStatusEmpty#9d05049 = UserStatus;
userStatusOnline#edb93949 expires:int = UserStatus;
userStatusOffline#8c703f was_online:int = UserStatus;
userStatusRecently#7b197dc8 flags:# by_me:flags.0?true = UserStatus;
userStatusLastWeek#541a1d1a flags:# by_me:flags.0?true = UserStatus;
userStatusLastMonth#65899777 flags:# by_me:flags.0?true = UserStatus;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**userStatusEmpty**](constructor/userStatusEmpty) | User status has not been set yet |
| [**userStatusOnline**](constructor/userStatusOnline) | Online status of the user |
| [**userStatusOffline**](constructor/userStatusOffline) | The user's offline status |
| [**userStatusRecently**](constructor/userStatusRecently) | Online status: last seen recently |
| [**userStatusLastWeek**](constructor/userStatusLastWeek) | Online status: last seen last week |
| [**userStatusLastMonth**](constructor/userStatusLastMonth) | Online status: last seen last month |