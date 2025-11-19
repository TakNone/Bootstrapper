# messages.editFactCheck

**Description** : *Edit/create a fact\-check on a message*

**Layer** : 218

```tl
messages.editFactCheck#589ee75 peer:InputPeer msg_id:int text:TextWithEntities = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | Peer where the message was sent |
| <mark>msg_id</mark> | [`int`](type/int) | Message ID |
| <mark>text</mark> | [`TextWithEntities`](type/TextWithEntities) | Fact-check (maximum UTF-8 length specified in appConfig.factcheck_length_limit) |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **CHAT_ACTION_FORBIDDEN** | `403` | You cannot execute this action |
| **PEER_ID_INVALID** | `400` | The provided peer id is invalid |

---

## Example

```php
$updates = $client->messages->editFactCheck(
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	msg_id : 97,
	text : $client->textWithEntities(
		text : 'AnawbJ13YUPZXt2O',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 89,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 81,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 33,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 11,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 33,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 17,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 100,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 50,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 65,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 45,
				language : '9SyBcWXFtMg0woqd',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 81,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 43,
				user_id : -5973531416625360971,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 59,
				user_id : $client->get_input_user(peer : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 69,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 59,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 32,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 27,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 83,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 77,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 89,
				document_id : -8756484168166862250,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 90,
			),
		),
	),
);
```