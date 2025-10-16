# help.termsOfServiceUpdateEmpty

**Description** : *No changes were made to telegram&#039;s terms of service*

**Layer** : 216

```tl
help.termsOfServiceUpdateEmpty#e3309f7f expires:int = help.TermsOfServiceUpdate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>expires</mark> | [`int`](type/int) | New TOS updates will have to be queried using help.getTermsOfServiceUpdate in expires seconds |

---

## Type

[help.TermsOfServiceUpdate](type/help.TermsOfServiceUpdate)

---

## Example

```php
$helpTermsOfServiceUpdate = $client->help->termsOfServiceUpdateEmpty(
	expires : 43,
);
```