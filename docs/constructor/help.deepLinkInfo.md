# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 211

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
	message : '9WHKGlIqNpeSYBnP',
	entities : array(
		$client->messageEntityUnknown(
			offset : 20,
			length : 96,
		),
		$client->messageEntityMention(
			offset : 99,
			length : 10,
		),
		$client->messageEntityHashtag(
			offset : 68,
			length : 10,
		),
		$client->messageEntityBotCommand(
			offset : 54,
			length : 15,
		),
		$client->messageEntityUrl(
			offset : 70,
			length : 37,
		),
		$client->messageEntityEmail(
			offset : 6,
			length : 93,
		),
		$client->messageEntityBold(
			offset : 91,
			length : 30,
		),
		$client->messageEntityItalic(
			offset : 53,
			length : 63,
		),
		$client->messageEntityCode(
			offset : 37,
			length : 12,
		),
		$client->messageEntityPre(
			offset : 61,
			length : 85,
			language : 'UfyKH8EdRDFcBqVG',
		),
		$client->messageEntityTextUrl(
			offset : 50,
			length : 6,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 52,
			length : 4,
			user_id : 3738130005023114235,
		),
		$client->inputMessageEntityMentionName(
			offset : 26,
			length : 46,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 82,
			length : 76,
		),
		$client->messageEntityCashtag(
			offset : 31,
			length : 13,
		),
		$client->messageEntityUnderline(
			offset : 48,
			length : 45,
		),
		$client->messageEntityStrike(
			offset : 45,
			length : 79,
		),
		$client->messageEntityBankCard(
			offset : 98,
			length : 97,
		),
		$client->messageEntitySpoiler(
			offset : 66,
			length : 49,
		),
		$client->messageEntityCustomEmoji(
			offset : 42,
			length : 80,
			document_id : 9162587959496725851,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 18,
			length : 45,
		),
	),
);
```