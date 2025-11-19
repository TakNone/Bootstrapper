# inputMessageReplyTo

**Description** : *Message to which the specified message replies to*

**Layer** : 218

```tl
inputMessageReplyTo#bad88395 id:int = InputMessage;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | ID of the message that replies to the message we need |

---

## Type

[InputMessage](type/InputMessage)

---

## Example

```php
$inputMessage = $client->inputMessageReplyTo(
	id : 97,
);
```