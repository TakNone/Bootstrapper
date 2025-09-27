# RequestPeerType

**Description** : *Filtering criteria to use for the peer selection list shown to the user*

**Layer** : 216

```tl
requestPeerTypeUser#5f3b8a00 flags:# bot:flags.0?Bool premium:flags.1?Bool = RequestPeerType;
requestPeerTypeChat#c9f06e1b flags:# creator:flags.0?true user_admin_rights:flags.1?ChatAdminRights bot_participant:flags.5?true bot_admin_rights:flags.2?ChatAdminRights has_username:flags.3?Bool forum:flags.4?Bool = RequestPeerType;
requestPeerTypeBroadcast#339bef6c flags:# creator:flags.0?true user_admin_rights:flags.1?ChatAdminRights has_username:flags.3?Bool bot_admin_rights:flags.2?ChatAdminRights = RequestPeerType;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**requestPeerTypeUser**](constructor/requestPeerTypeUser) | Choose a user |
| [**requestPeerTypeChat**](constructor/requestPeerTypeChat) | Choose a chat or supergroup |
| [**requestPeerTypeBroadcast**](constructor/requestPeerTypeBroadcast) | Choose a channel |