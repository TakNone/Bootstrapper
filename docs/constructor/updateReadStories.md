# updateReadStories

**Description** : *Stories of a specific peer were marked as read*

**Layer** : 233

```tl
updateReadStories#f74e932b peer:Peer max_id:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`Peer`](type/Peer) | The peer |
| <mark>max_id</mark> | [`int`](type/int) | ID of the last story that was marked as read |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateReadStories(
	peer : $client->peerUser(
		user_id : 286431673529444525,
	),
	max_id : 88,
);
```