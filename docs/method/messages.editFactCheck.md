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
	msg_id : 9,
	text : $client->textWithEntities(
		text : 'uH0zIme92cLO5Kjv',
		entities : array(
			$client->messageEntityUnknown(
				offset : 0,
				length : 10,
			),
			$client->messageEntityMention(
				offset : 0,
				length : 94,
			),
			$client->messageEntityHashtag(
				offset : 0,
				length : 45,
			),
			$client->messageEntityBotCommand(
				offset : 0,
				length : 47,
			),
			$client->messageEntityUrl(
				offset : 0,
				length : 44,
			),
			$client->messageEntityEmail(
				offset : 0,
				length : 8,
			),
			$client->messageEntityBold(
				offset : 0,
				length : 54,
			),
			$client->messageEntityItalic(
				offset : 0,
				length : 51,
			),
			$client->messageEntityCode(
				offset : 0,
				length : 0,
			),
			$client->messageEntityPre(
				offset : 0,
				length : 87,
				language : '2B9YkUOvZl0cry6x',
			),
			$client->messageEntityTextUrl(
				offset : 0,
				length : 12,
				url : 'https://docs.liveproto.dev',
			),
			$client->messageEntityMentionName(
				offset : 0,
				length : 91,
				user_id : -2431880593102395862,
			),
			$client->inputMessageEntityMentionName(
				offset : 0,
				length : 70,
				user_id : $client->get_input_user(user : '@TakNone'),
			),
			$client->messageEntityPhone(
				offset : 0,
				length : 37,
			),
			$client->messageEntityCashtag(
				offset : 0,
				length : 18,
			),
			$client->messageEntityUnderline(
				offset : 0,
				length : 50,
			),
			$client->messageEntityStrike(
				offset : 0,
				length : 24,
			),
			$client->messageEntityBankCard(
				offset : 0,
				length : 65,
			),
			$client->messageEntitySpoiler(
				offset : 0,
				length : 65,
			),
			$client->messageEntityCustomEmoji(
				offset : 0,
				length : 5,
				document_id : 6840578332725993924,
			),
			$client->messageEntityBlockquote(
				collapsed : true,
				offset : 0,
				length : 86,
			),
		),
	),
);
```