# contacts.deleteByPhones

**Description** : *Delete contacts by phone number*

**Layer** : 211

```tl
contacts.deleteByPhones#1013fd9e phones:Vector<string> = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>phones</mark> | [`Vector<string>`](type/string) | Phone numbers |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->contacts->deleteByPhones(
	phones : array('+1234567890'),
);
```