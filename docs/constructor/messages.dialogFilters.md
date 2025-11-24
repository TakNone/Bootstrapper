# messages.dialogFilters

**Description** : *Folder and folder tags information*

**Layer** : 218

```tl
messages.dialogFilters#2ad93719 flags:# tags_enabled:flags.0?true filters:Vector<DialogFilter> = messages.DialogFilters;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **tags_enabled** | [`flags.0?true`](type/true) | Whether folder tags are enabled |
| <mark>filters</mark> | [`Vector<DialogFilter>`](type/DialogFilter) | Folders |

---

## Type

[messages.DialogFilters](type/messages.DialogFilters)

---

## Example

```php
$messagesDialogFilters = $client->messages->dialogFilters(
	tags_enabled : true,
	filters : array(
		$client->dialogFilter(
			contacts : true,
			non_contacts : true,
			groups : true,
			broadcasts : true,
			bots : true,
			exclude_muted : true,
			exclude_read : true,
			exclude_archived : true,
			title_noanimate : true,
			id : 64,
			title : $client->textWithEntities(
				text : 'YZ7dhyiNW6mlkwxM',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 9,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 32,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 3,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 4,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 33,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 7,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 9,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 6,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 64,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 43,
						language : 'h2m7vVrzCesPGNOo',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 59,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 34,
						user_id : -429464259063299882,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 48,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 60,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 61,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 65,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 24,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 45,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 92,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 95,
						document_id : 5552060201724878725,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 78,
					),
				),
			),
			emoticon : '2YpT5vsG4nHiolK7',
			color : 30,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 67,
			title : $client->textWithEntities(
				text : 'dgGTAxaDom3jzOXI',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 48,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 2,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 24,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 26,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 13,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 63,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 53,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 12,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 28,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 37,
						language : 'dZhqEkS8AQCJ1iwg',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 38,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 64,
						user_id : -4218915943517970295,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 9,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 29,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 77,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 15,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 86,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 40,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 11,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 31,
						document_id : 7208442390404676307,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 19,
					),
				),
			),
			emoticon : 'xdiO4mK3fBoZEauH',
			color : 38,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
	),
);
```