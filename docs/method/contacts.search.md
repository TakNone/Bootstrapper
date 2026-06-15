# contacts.search

**Description** : *Returns users found by username substring*

**Layer** : 227

```tl
contacts.search#5f58d0f flags:# broadcasts:flags.0?true bots:flags.1?true q:string limit:int = contacts.Found;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **broadcasts** | [`flags.0?true`](type/true) | NOTHING |
| **bots** | [`flags.1?true`](type/true) | NOTHING |
| <mark>q</mark> | [`string`](type/string) | Target substring |
| <mark>limit</mark> | [`int`](type/int) | Maximum number of users to be returned |

---

## Result

[contacts.Found](type/contacts.Found)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **QUERY_TOO_SHORT** | `400` | The query string is too short |
| **SEARCH_QUERY_EMPTY** | `400` | The search query is empty |

---

## Example

```php
$contactsFound = $client->contacts->search(
	broadcasts : true,
	bots : true,
	q : 'kjL53evKlM2FacwT',
	limit : 31,
);
```