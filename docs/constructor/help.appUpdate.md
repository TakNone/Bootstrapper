# help.appUpdate

**Description** : *An update is available for the application*

**Layer** : 222

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
	id : 78,
	version : 'OFfN94BMZgUA1HqE',
	text : 'MqglyHACRxu5VfTX',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 57,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 97,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 78,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 61,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 4,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 70,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 83,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 18,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 32,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 4,
			language : 'uziVKnO0XdmQpRs2',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 36,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 36,
			user_id : -1096689720618033292,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 51,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 11,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 68,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 14,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 31,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 100,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 64,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 22,
			document_id : 109738682618266195,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 80,
		),
	),
	document : $client->documentEmpty(
		id : 1103452465190020045,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : -3182929740146912924,
	),
);
```