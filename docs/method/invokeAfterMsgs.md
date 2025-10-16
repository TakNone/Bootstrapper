# invokeAfterMsgs

**Description** : *Invokes a query after a successful completion of previous queries*

**Layer** : 216

```tl
invokeAfterMsgs#3dc4b4f0 {X:Type} msg_ids:Vector<long> query:!X = X;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>msg_ids</mark> | [`Vector<long>`](type/long) | List of messages on which a current query depends |
| <mark>query</mark> | [`!X`](type/X) | The query itself |

---

## Result

[X](type/X)

---

## Example

```php
$x = $client->invokeAfterMsgs(
	msg_ids : array(5864206325969938950),
	query : $client->help->getConfig(raw : true),
);
```