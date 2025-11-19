# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 218

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
	message : 'SaCHQzkYRgldGMPL',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 61,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 92,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 33,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 32,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 78,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 50,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 55,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 85,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 64,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 96,
			language : 'iWRSfm79q30VO42H',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 18,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 98,
			user_id : -6739200002295061676,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 0,
			user_id : $client->get_input_user(peer : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 20,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 65,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 59,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 47,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 21,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 53,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 2,
			document_id : 1002659719014835859,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 50,
		),
	),
);
```