# ExportedChatInvite

**Description** : *Exported chat invite*

**Layer** : 211

```tl
chatInviteExported#a22cbd96 flags:# revoked:flags.0?true permanent:flags.5?true request_needed:flags.6?true link:string admin_id:long date:int start_date:flags.4?int expire_date:flags.1?int usage_limit:flags.2?int usage:flags.3?int requested:flags.7?int subscription_expired:flags.10?int title:flags.8?string subscription_pricing:flags.9?StarsSubscriptionPricing = ExportedChatInvite;
chatInvitePublicJoinRequests#ed107ab7 = ExportedChatInvite;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**chatInviteExported**](constructor/chatInviteExported) | Exported chat invite |
| [**chatInvitePublicJoinRequests**](constructor/chatInvitePublicJoinRequests) | Used in updates and in the channel log to indicate when a user is requesting to join or has joined a discussion group |