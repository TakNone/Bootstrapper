# Authorization

**Description** : *Represents a logged-in session*

**Layer** : 211

```tl
authorization#ad01d61d flags:# current:flags.0?true official_app:flags.1?true password_pending:flags.2?true encrypted_requests_disabled:flags.3?true call_requests_disabled:flags.4?true unconfirmed:flags.5?true hash:long device_model:string platform:string system_version:string api_id:int app_name:string app_version:string date_created:int date_active:int ip:string country:string region:string = Authorization;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**authorization**](constructor/authorization) | Logged-in session |