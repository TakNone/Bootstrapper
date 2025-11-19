# invokeAfterMsg

**Description** : *Invokes a query after successful completion of one of the previous queries*

**Layer** : 218

```tl
invokeAfterMsg#cb9f372d {X:Type} msg_id:long query:!X = X;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>msg_id</mark> | [`long`](type/long) | Message identifier on which a current query depends |
| <mark>query</mark> | [`!X`](type/X) | The query itself |

---

## Result

[X](type/X)

---

## Example

```php
$x = $client->invokeAfterMsg(
	msg_id : -1987424506316771080,
	query : $client->help->getConfig(raw : true),
);
```