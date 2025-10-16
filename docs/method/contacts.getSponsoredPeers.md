# contacts.getSponsoredPeers

**Description** : *Obtain a list of sponsored peer search results for a given query*

**Layer** : 216

```tl
contacts.getSponsoredPeers#b6c8c393 q:string = contacts.SponsoredPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>q</mark> | [`string`](type/string) | The query |

---

## Result

[contacts.SponsoredPeers](type/contacts.SponsoredPeers)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **SEARCH_QUERY_EMPTY** | `400` | The search query is empty |

---

## Example

```php
$contactsSponsoredPeers = $client->contacts->getSponsoredPeers(
	q : 'x2czvuIr6WXQ49YK',
);
```