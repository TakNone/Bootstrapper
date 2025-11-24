# messageActionSuggestProfilePhoto

**Description** : *A new profile picture was suggested using photos\.uploadContactProfilePhoto*

**Layer** : 218

```tl
messageActionSuggestProfilePhoto#57de635e photo:Photo = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>photo</mark> | [`Photo`](type/Photo) | The photo that the user suggested we set as profile picture |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionSuggestProfilePhoto(
	photo : $client->photoEmpty(
		id : -6895792211424959785,
	),
);
```