# help.TermsOfServiceUpdate

**Description** : *Update of Telegram's terms of service*

**Layer** : 211

```tl
help.termsOfServiceUpdateEmpty#e3309f7f expires:int = help.TermsOfServiceUpdate;
help.termsOfServiceUpdate#28ecf961 expires:int terms_of_service:help.TermsOfService = help.TermsOfServiceUpdate;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**help.termsOfServiceUpdateEmpty**](constructor/help.termsOfServiceUpdateEmpty) | No changes were made to telegram's terms of service |
| [**help.termsOfServiceUpdate**](constructor/help.termsOfServiceUpdate) | Info about an update of telegram's terms of service. If the terms of service are declined, then the account.deleteAccount method should be called with the reason "Decline ToS update" |