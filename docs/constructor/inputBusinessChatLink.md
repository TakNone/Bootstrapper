# inputBusinessChatLink

**Description** : *Contains info about a business chat deep link &raquo; to be created by the current account*

**Layer** : 222

```tl
inputBusinessChatLink#11679fa7 flags:# message:string entities:flags.0?Vector<MessageEntity> title:flags.1?string = InputBusinessChatLink;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>message</mark> | [`string`](type/string) | Message to pre-fill in the message input field |
| **entities** | [`flags.0?Vector<MessageEntity>`](type/MessageEntity) | Message entities for styled text |
| **title** | [`flags.1?string`](type/string) | Human-readable name of the link, to simplify management in the UI (only visible to the creator of the link) |

---

## Type

[InputBusinessChatLink](type/InputBusinessChatLink)

---

## Example

```php
$inputBusinessChatLink = $client->inputBusinessChatLink(
	message : 'a89d0JX6Ie3ozKrH',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 19,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 25,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 62,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 53,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 4,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 0,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 65,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 65,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 72,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 69,
			language : 'XuoPKSda2ExgpiFN',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 64,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 72,
			user_id : 8520652068798809330,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 20,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 80,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 78,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 24,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 70,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 13,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 14,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 5,
			document_id : -5297387169814857441,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 12,
		),
	),
	title : '6ueY4JXx2qHV8fir',
);
```