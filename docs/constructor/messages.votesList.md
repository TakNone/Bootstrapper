# messages.votesList

**Description** : *How users voted in a poll*

**Layer** : 216

```tl
messages.votesList#4899484e flags:# count:int votes:Vector<MessagePeerVote> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = messages.VotesList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of votes for all options (or only for the chosen option, if provided to messages.getPollVotes) |
| <mark>votes</mark> | [`Vector<MessagePeerVote>`](type/MessagePeerVote) | Vote info for each user |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Info about users that voted in the poll |
| **next_offset** | [`flags.0?string`](type/string) | Offset to use with the next messages.getPollVotes request, empty string if no more results are available |

---

## Type

[messages.VotesList](type/messages.VotesList)

---

## Example

```php
$messagesVotesList = $client->messages->votesList(
	count : 98,
	votes : array(
		$client->messagePeerVote(
			peer : $client->peerUser(
				user_id : 5424672823053573707,
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 56,
		),
		$client->messagePeerVoteInputOption(
			peer : $client->peerUser(
				user_id : -7854184348488451024,
			),
			date : 67,
		),
		$client->messagePeerVoteMultiple(
			peer : $client->peerUser(
				user_id : -6822337510129621858,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			date : 18,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -5390084218286385968,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -394848016850199405,
			title : 'kRMwdB2lHGmEeqJL',
			photo : $client->chatPhotoEmpty(),
			participants_count : 67,
			date : 24,
			version : 35,
			migrated_to : $client->inputChannelEmpty(),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 26,
			),
		),
		$client->chatForbidden(
			id : -8572072030389366767,
			title : 'KMi5pkrRTh98OSot',
		),
		$client->channel(
			creator : true,
			left : true,
			broadcast : true,
			verified : true,
			megagroup : true,
			restricted : true,
			signatures : true,
			min : true,
			scam : true,
			has_link : true,
			has_geo : true,
			slowmode_enabled : true,
			call_active : true,
			call_not_empty : true,
			fake : true,
			gigagroup : true,
			noforwards : true,
			join_to_send : true,
			join_request : true,
			forum : true,
			stories_hidden : true,
			stories_hidden_min : true,
			stories_unavailable : true,
			signature_profiles : true,
			autotranslation : true,
			broadcast_messages_allowed : true,
			monoforum : true,
			forum_tabs : true,
			id : 6865151522696934443,
			access_hash : 4108416348588724128,
			title : 'HOefZWJrTnty9hLi',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 1,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '1ARXL8KN3HzypqWQ',
					reason : 'mBYoLj9WKekvxq0b',
					text : 'TNWE5x1Ct9i8b6lR',
				),
			),
			admin_rights : $client->chatAdminRights(
				change_info : true,
				post_messages : true,
				edit_messages : true,
				delete_messages : true,
				ban_users : true,
				invite_users : true,
				pin_messages : true,
				add_admins : true,
				anonymous : true,
				manage_call : true,
				other : true,
				manage_topics : true,
				post_stories : true,
				edit_stories : true,
				delete_stories : true,
				manage_direct_messages : true,
			),
			banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 26,
			),
			default_banned_rights : $client->chatBannedRights(
				view_messages : true,
				send_messages : true,
				send_media : true,
				send_stickers : true,
				send_gifs : true,
				send_games : true,
				send_inline : true,
				embed_links : true,
				send_polls : true,
				change_info : true,
				invite_users : true,
				pin_messages : true,
				manage_topics : true,
				send_photos : true,
				send_videos : true,
				send_roundvideos : true,
				send_audios : true,
				send_voices : true,
				send_docs : true,
				send_plain : true,
				until_date : 75,
			),
			participants_count : 54,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 29,
			color : $client->peerColor(
				color : 27,
				background_emoji_id : 550898693273950481,
			),
			profile_color : $client->peerColor(
				color : 36,
				background_emoji_id : 969240745985315615,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 89,
			subscription_until_date : 90,
			bot_verification_icon : -1709169174927224172,
			send_paid_messages_stars : -4964456969107949799,
			linked_monoforum_id : 1632727628636100765,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7549098826091288128,
			access_hash : 1181941238255538959,
			title : 'DdF5CBsSTybcl8Uv',
			until_date : 51,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2979721205551701205,
		),
		$client->user(
			self : true,
			contact : true,
			mutual_contact : true,
			deleted : true,
			bot : true,
			bot_chat_history : true,
			bot_nochats : true,
			verified : true,
			restricted : true,
			min : true,
			bot_inline_geo : true,
			support : true,
			scam : true,
			apply_min_photo : true,
			fake : true,
			bot_attach_menu : true,
			premium : true,
			attach_menu_enabled : true,
			bot_can_edit : true,
			close_friend : true,
			stories_hidden : true,
			stories_unavailable : true,
			contact_require_premium : true,
			bot_business : true,
			bot_has_main_app : true,
			bot_forum_view : true,
			id : -2428824460392014805,
			access_hash : -2166938521605497576,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 42,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '6wgTjG4dNqV2Ulk1',
					reason : '2G5fnHmgSCyAsB1i',
					text : 'HI283Q4nVJBFSzbU',
				),
			),
			bot_inline_placeholder : 'IVGgqsKBEzrpfLkU',
			lang_code : 'H6ReWNvV1DYbgfn0',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 59,
			color : $client->peerColor(
				color : 52,
				background_emoji_id : 8930358017696466502,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : -6143444119852905514,
			),
			bot_active_users : 96,
			bot_verification_icon : -4545015204414557025,
			send_paid_messages_stars : -1732154851819207769,
		),
	),
	next_offset : 'o8iUHzT9p2mYaM6c',
);
```