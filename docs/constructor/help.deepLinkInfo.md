# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 216

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
	message : 'coZ8eu2fdtXrWhRM',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 84,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 77,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 28,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 96,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 18,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 18,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 71,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 57,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 1,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 87,
			language : 'OsWXrCGFPRLmty45',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 24,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 70,
			user_id : -6763908501468970910,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 80,
			user_id : $client->inputUserEmpty(),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 88,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 72,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 9,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 41,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 5,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 50,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 89,
			document_id : -7189828493702718453,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 49,
		),
	),
);
```