# UrlAuthResult

**Description** : *URL authorization result*

**Layer** : 222

```tl
urlAuthResultRequest#32fabf1a flags:# request_write_access:flags.0?true request_phone_number:flags.1?true bot:User domain:string browser:flags.2?string platform:flags.2?string ip:flags.2?string region:flags.2?string = UrlAuthResult;
urlAuthResultAccepted#623a8fa0 flags:# url:flags.0?string = UrlAuthResult;
urlAuthResultDefault#a9d6db1f = UrlAuthResult;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**urlAuthResultRequest**](constructor/urlAuthResultRequest) | Details about the authorization request, for more info click here » |
| [**urlAuthResultAccepted**](constructor/urlAuthResultAccepted) | Details about an accepted authorization request, for more info click here » |
| [**urlAuthResultDefault**](constructor/urlAuthResultDefault) | Details about an accepted authorization request, for more info click here » |