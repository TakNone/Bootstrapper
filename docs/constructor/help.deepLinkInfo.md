# help.deepLinkInfo

**Description** : *Deep link info, see the here for more details*

**Layer** : 222

```tl
help.deepLinkInfo#6a4ee832 flags:# update_app:flags.0?true message:string entities:flags.1?Vector<MessageEntity> = help.DeepLinkInfo;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
	message : '6wxkGvy4oHL1TjDX',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 43,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 65,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 78,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 26,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 31,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 91,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 68,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 12,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 29,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 100,
			language : '6rbfZ3qkUcTmiRVl',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 49,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 88,
			user_id : -1821663248747492810,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 34,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 24,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 73,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 80,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 20,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 65,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 98,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 0,
			document_id : -4052861023474413697,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 26,
		),
	),
);
```