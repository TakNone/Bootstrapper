# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 214

```tl
help.deepLinkInfo#6a4ee832 flags:# update_app:flags.0?true message:string entities:flags.1?Vector<MessageEntity> = help.DeepLinkInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **update_app** | [`flags.0?true`](type/true) | An update of the app is required to parse this link |
| <mark>message</mark> | [`string`](type/string) | Message to show to the user |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |

---

## Type

[help.DeepLinkInfo](type/help.DeepLinkInfo)

---

## Example

```php
$helpDeepLinkInfo = $client->help->deepLinkInfo(
	update_app : true,
	message : 'cbsJTQgYGnzAiV87',
	entities : array(
		$client->messageEntityUnknown(
			offset : 88,
			length : 43,
		),
		$client->messageEntityMention(
			offset : 22,
			length : 81,
		),
		$client->messageEntityHashtag(
			offset : 8,
			length : 0,
		),
		$client->messageEntityBotCommand(
			offset : 84,
			length : 73,
		),
		$client->messageEntityUrl(
			offset : 6,
			length : 84,
		),
		$client->messageEntityEmail(
			offset : 94,
			length : 96,
		),
		$client->messageEntityBold(
			offset : 56,
			length : 18,
		),
		$client->messageEntityItalic(
			offset : 4,
			length : 70,
		),
		$client->messageEntityCode(
			offset : 1,
			length : 75,
		),
		$client->messageEntityPre(
			offset : 34,
			length : 47,
			language : 'hXNxb4Y8zmveBFlw',
		),
		$client->messageEntityTextUrl(
			offset : 1,
			length : 53,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 95,
			length : 40,
			user_id : 5397378980998977619,
		),
		$client->inputMessageEntityMentionName(
			offset : 40,
			length : 81,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 37,
			length : 25,
		),
		$client->messageEntityCashtag(
			offset : 62,
			length : 36,
		),
		$client->messageEntityUnderline(
			offset : 84,
			length : 5,
		),
		$client->messageEntityStrike(
			offset : 9,
			length : 32,
		),
		$client->messageEntityBankCard(
			offset : 9,
			length : 41,
		),
		$client->messageEntitySpoiler(
			offset : 5,
			length : 40,
		),
		$client->messageEntityCustomEmoji(
			offset : 100,
			length : 45,
			document_id : 4954601200708203281,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 56,
			length : 93,
		),
	),
);
```