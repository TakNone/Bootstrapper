# messageActionBoostApply

**Description** : *Some boosts &raquo; were applied to the channel or supergroup*

**Layer** : 211

```tl
messageActionBoostApply#cc02aa6d boosts:int = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>boosts</mark> | [`int`](type/int) | Number of applied boosts |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionBoostApply(
	boosts : 76,
);
```