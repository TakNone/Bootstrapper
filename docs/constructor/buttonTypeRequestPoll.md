# buttonTypeRequestPoll

**Layer** : 233

```tl
buttonTypeRequestPoll#aacfff84 flags:# quiz:flags.0?Bool = ButtonType;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **quiz** | [`flags.0?Bool`](type/Bool) | NOTHING |

---

## Type

[ButtonType](type/ButtonType)

---

## Example

```php
$buttonType = $client->buttonTypeRequestPoll(
	quiz : false,
);
```