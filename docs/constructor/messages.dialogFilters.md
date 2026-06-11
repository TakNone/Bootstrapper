# messages.dialogFilters

**Description** : *Folder and folder tags information*

**Layer** : 227

```tl
messages.dialogFilters#2ad93719 flags:# tags_enabled:flags.0?true filters:Vector<DialogFilter> = messages.DialogFilters;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
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
			id : 94,
			title : $client->textWithEntities(
				text : 'YyEp5RKaTUni8dOe',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 61,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 16,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 73,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 36,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 94,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 21,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 74,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 4,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 71,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 69,
						language : 'zkWbNYHoKtapSh27',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 47,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 83,
						user_id : -6213884750323684779,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 10,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 0,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 89,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 55,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 59,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 58,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 9,
						document_id : 5199136922053221159,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 11,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 55,
						date : 85,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 1,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 2,
						old_text : 'Tx2LfUCp7yRiEvSw',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 33,
					),
				),
			),
			emoticon : '2I4NTpEv3wyJXW6P',
			color : 91,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
		$client->dialogFilterDefault(),
		$client->dialogFilterChatlist(
			has_my_invites : true,
			title_noanimate : true,
			id : 83,
			title : $client->textWithEntities(
				text : 'he240mdNG6XrjMkq',
				entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 5,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 39,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 72,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 73,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 21,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 37,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 69,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 71,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 27,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 7,
						language : '8GY3w4hDf0Z9TvBk',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 28,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 21,
						user_id : -4269437382465704417,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 92,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 82,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 80,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 86,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 45,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 10,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 34,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 69,
						document_id : -5174146018346859716,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 44,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 88,
						date : 24,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 64,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 50,
						old_text : 'LJCwmYy7Sv4FhHXx',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 96,
					),
				),
			),
			emoticon : 'n4RJDvrycdh2WC9O',
			color : 59,
			pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
		),
	),
);
```