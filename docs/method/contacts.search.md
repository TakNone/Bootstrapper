# contacts.search

**Description** : *Returns users found by username substring*

**Layer** : 218

```tl
contacts.search#11f812d8 q:string limit:int = contacts.Found;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
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
	q : '4pXGsg83Kih0B7Wj',
	limit : 12,
);
```