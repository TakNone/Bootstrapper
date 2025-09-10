# help.appUpdate

**Description** : *An update is available for the application*

**Layer** : 214

```tl
help.appUpdate#ccbbce30 flags:# can_not_skip:flags.0?true id:int version:string text:string entities:Vector<MessageEntity> document:flags.1?Document url:flags.2?string sticker:flags.3?Document = help.AppUpdate;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
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
	id : 27,
	version : 'XdatpmTUiQyf86zL',
	text : 'hr24AR0BWHctXlmf',
	entities : array(
		$client->messageEntityUnknown(
			offset : 49,
			length : 73,
		),
		$client->messageEntityMention(
			offset : 96,
			length : 63,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 22,
		),
		$client->messageEntityBotCommand(
			offset : 29,
			length : 37,
		),
		$client->messageEntityUrl(
			offset : 84,
			length : 12,
		),
		$client->messageEntityEmail(
			offset : 17,
			length : 75,
		),
		$client->messageEntityBold(
			offset : 63,
			length : 18,
		),
		$client->messageEntityItalic(
			offset : 91,
			length : 54,
		),
		$client->messageEntityCode(
			offset : 56,
			length : 62,
		),
		$client->messageEntityPre(
			offset : 82,
			length : 88,
			language : 'YXD2UoAd7kC9usIp',
		),
		$client->messageEntityTextUrl(
			offset : 78,
			length : 58,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 33,
			length : 74,
			user_id : 7485296904566641113,
		),
		$client->inputMessageEntityMentionName(
			offset : 99,
			length : 8,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 11,
			length : 84,
		),
		$client->messageEntityCashtag(
			offset : 19,
			length : 25,
		),
		$client->messageEntityUnderline(
			offset : 90,
			length : 12,
		),
		$client->messageEntityStrike(
			offset : 67,
			length : 100,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 44,
		),
		$client->messageEntitySpoiler(
			offset : 58,
			length : 11,
		),
		$client->messageEntityCustomEmoji(
			offset : 42,
			length : 43,
			document_id : 8868132067910831965,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 42,
			length : 55,
		),
	),
	document : $client->documentEmpty(
		id : 2809060027008500978,
	),
	url : 'https://docs.liveproto.dev',
	sticker : $client->documentEmpty(
		id : 2511132426954910020,
	),
);
```