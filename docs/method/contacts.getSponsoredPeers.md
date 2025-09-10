# contacts.getSponsoredPeers

**Layer** : 214

```tl
contacts.getSponsoredPeers#b6c8c393 q:string = contacts.SponsoredPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>q</mark> | [`string`](type/string) | NOTHING |

---

## Result

[contacts.SponsoredPeers](type/contacts.SponsoredPeers)

---

## Example

```php
$contactsSponsoredPeers = $client->contacts->getSponsoredPeers(
	q : 'IwKoH4axtlT3ORWZ',
);
```