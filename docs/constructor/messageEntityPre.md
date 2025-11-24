# messageEntityPre

**Description** : *Message entity representing a preformatted codeblock, allowing the user to specify a programming language for the codeblock*

**Layer** : 218

```tl
messageEntityPre#73924be0 offset:int length:int language:string = MessageEntity;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>offset</mark> | [`int`](type/int) | Offset of message entity within message (in UTF-16 code units) |
| <mark>length</mark> | [`int`](type/int) | Length of message entity within message (in UTF-16 code units) |
| <mark>language</mark> | [`string`](type/string) | Programming language of the code |

---

## Type

[MessageEntity](type/MessageEntity)

---

## Example

```php
$messageEntity = $client->messageEntityPre(
	offset : 0,
	length : 44,
	language : 'kc7UnWgwN5Q0z3rH',
);
```