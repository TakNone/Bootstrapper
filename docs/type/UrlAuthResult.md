# UrlAuthResult

**Description** : *URL authorization result*

**Layer** : 211

```tl
urlAuthResultRequest#92d33a0e flags:# request_write_access:flags.0?true bot:User domain:string = UrlAuthResult;
urlAuthResultAccepted#8f8c0e4e url:string = UrlAuthResult;
urlAuthResultDefault#a9d6db1f = UrlAuthResult;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**urlAuthResultRequest**](constructor/urlAuthResultRequest) | Details about the authorization request, for more info click here » |
| [**urlAuthResultAccepted**](constructor/urlAuthResultAccepted) | Details about an accepted authorization request, for more info click here » |
| [**urlAuthResultDefault**](constructor/urlAuthResultDefault) | Details about an accepted authorization request, for more info click here » |