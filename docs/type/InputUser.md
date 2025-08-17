# InputUser

**Description** : *Defines a user for subsequent interaction*

**Layer** : 211

```tl
inputUserEmpty#b98886cf = InputUser;
inputUserSelf#f7c1b13f = InputUser;
inputUser#f21158c6 user_id:long access_hash:long = InputUser;
inputUserFromMessage#1da448e2 peer:InputPeer msg_id:int user_id:long = InputUser;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputUserEmpty**](constructor/inputUserEmpty) | Empty constructor, does not define a user |
| [**inputUserSelf**](constructor/inputUserSelf) | Defines the current user |
| [**inputUser**](constructor/inputUser) | Defines a user for further interaction |
| [**inputUserFromMessage**](constructor/inputUserFromMessage) | Defines a min user that was seen in a certain message of a certain chat |