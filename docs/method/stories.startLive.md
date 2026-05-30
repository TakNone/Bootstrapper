# stories.startLive

**Layer** : 222

```tl
stories.startLive#d069ccde flags:# pinned:flags.2?true noforwards:flags.4?true rtmp_stream:flags.5?true peer:InputPeer caption:flags.0?string entities:flags.1?Vector<MessageEntity> privacy_rules:Vector<InputPrivacyRule> random_id:long messages_enabled:flags.6?Bool send_paid_messages_stars:flags.7?long = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | NOTHING |
| **pinned** | [`flags.2?true`](type/true) | NOTHING |
| **noforwards** | [`flags.4?true`](type/true) | NOTHING |
| **rtmp_stream** | [`flags.5?true`](type/true) | NOTHING |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | NOTHING |
| **caption** | [`flags.0?string`](type/string) | NOTHING |
| **entities** | [`flags.1?Vector<MessageEntity>`](type/MessageEntity) | NOTHING |
| <mark>privacy_rules</mark> | [`Vector<InputPrivacyRule>`](type/InputPrivacyRule) | NOTHING |
| <mark>random_id</mark> | [`long`](type/long) | NOTHING |
| **messages_enabled** | [`flags.6?Bool`](type/Bool) | NOTHING |
| **send_paid_messages_stars** | [`flags.7?long`](type/long) | NOTHING |

---

## Result

[Updates](type/Updates)

---

## Example

```php
$updates = $client->stories->startLive(
	pinned : true,
	noforwards : true,
	rtmp_stream : true,
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	caption : 'bq12aBvGHPUQWrZA',
	entities : array(
		$client->messageEntityUnknown(
			offset : 0,
			length : 96,
		),
		$client->messageEntityMention(
			offset : 0,
			length : 73,
		),
		$client->messageEntityHashtag(
			offset : 0,
			length : 35,
		),
		$client->messageEntityBotCommand(
			offset : 0,
			length : 25,
		),
		$client->messageEntityUrl(
			offset : 0,
			length : 50,
		),
		$client->messageEntityEmail(
			offset : 0,
			length : 65,
		),
		$client->messageEntityBold(
			offset : 0,
			length : 10,
		),
		$client->messageEntityItalic(
			offset : 0,
			length : 10,
		),
		$client->messageEntityCode(
			offset : 0,
			length : 25,
		),
		$client->messageEntityPre(
			offset : 0,
			length : 52,
			language : 'sd5uwAoqb9Q21HYI',
		),
		$client->messageEntityTextUrl(
			offset : 0,
			length : 58,
			url : 'https://docs.liveproto.dev',
		),
		$client->messageEntityMentionName(
			offset : 0,
			length : 65,
			user_id : -8938632821498366251,
		),
		$client->inputMessageEntityMentionName(
			offset : 0,
			length : 70,
			user_id : $client->get_input_user(user : '@TakNone'),
		),
		$client->messageEntityPhone(
			offset : 0,
			length : 19,
		),
		$client->messageEntityCashtag(
			offset : 0,
			length : 40,
		),
		$client->messageEntityUnderline(
			offset : 0,
			length : 32,
		),
		$client->messageEntityStrike(
			offset : 0,
			length : 62,
		),
		$client->messageEntityBankCard(
			offset : 0,
			length : 11,
		),
		$client->messageEntitySpoiler(
			offset : 0,
			length : 71,
		),
		$client->messageEntityCustomEmoji(
			offset : 0,
			length : 59,
			document_id : 4949480345561179512,
		),
		$client->messageEntityBlockquote(
			collapsed : true,
			offset : 0,
			length : 61,
		),
	),
	privacy_rules : array(
		$client->inputPrivacyValueAllowContacts(),
		$client->inputPrivacyValueAllowAll(),
		$client->inputPrivacyValueAllowUsers(
			users : array($client->get_input_user(user : '@TakNone')),
		),
		$client->inputPrivacyValueDisallowContacts(),
		$client->inputPrivacyValueDisallowAll(),
		$client->inputPrivacyValueDisallowUsers(
			users : array($client->get_input_user(user : '@TakNone')),
		),
		$client->inputPrivacyValueAllowChatParticipants(
			chats : array(-6547065261467305054),
		),
		$client->inputPrivacyValueDisallowChatParticipants(
			chats : array(8559199338011266006),
		),
		$client->inputPrivacyValueAllowCloseFriends(),
		$client->inputPrivacyValueAllowPremium(),
		$client->inputPrivacyValueAllowBots(),
		$client->inputPrivacyValueDisallowBots(),
	),
	random_id : 2791218814065343984,
	messages_enabled : false,
	send_paid_messages_stars : -9111209695379244138,
);
```