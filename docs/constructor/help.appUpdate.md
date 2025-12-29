# help.appUpdate

**Description** : *An update is available for the application*

**Layer** : 218

```tl
help.appUpdate#ccbbce30 flags:# can_not_skip:flags.0?true id:int version:string text:string entities:Vector<MessageEntity> document:flags.1?Document url:flags.2?string sticker:flags.3?Document = help.AppUpdate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **can_not_skip** | [`flags.0?true`](type/true) | Unskippable, the new info must be shown to the user (with a popup or something else) |
| <mark>id</mark> | [`int`](type/int) | Update ID |
| <mark>version</mark> | [`string`](type/string) | New version name |
| <mark>text</mark> | [`string`](type/string) | Text description of the update |
| <mark>entities</mark> | [`Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **document** | [`flags.1?Document`](type/Document) | Application binary |
| **url** | [`flags.2?string`](type/string) | Application download URL |
| **sticker** | [`flags.3?Document`](type/Document) | Associated sticker |

---

## Type

[help.AppUpdate](type/help.AppUpdate)

---

## Example

```php
$helpAppUpdate = $client->help->appUpdate(
	can_not_skip : true,
	id : 52,
	version : 'ifTdZjhyrqzFWV80',
	text : 'Vz0cR376vx54WqDu',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 46,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 60,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 52,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 100,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 39,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 93,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 73,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 52,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 72,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 34,
			language : 'XSFpEdhqLAP451CV',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 76,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 93,
			user_id : -4710547693622163893,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 91,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 11,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 56,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 72,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 76,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 21,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 77,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 93,
			document_id : 5149961956058668288,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 49,
		),
	),
	document : $client->documentEmpty(
		id : 7411918697653403103,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : 1677342453623177632,
	),
);
```