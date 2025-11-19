# messages.votesList

**Description** : *How users voted in a poll*

**Layer** : 218

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
	count : 36,
	votes : array(
		$client->messagePeerVote(
			peer : $client->peerUser(
				user_id : 5653716286507018576,
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 72,
		),
		$client->messagePeerVoteInputOption(
			peer : $client->peerUser(
				user_id : 2029361657086102601,
			),
			date : 71,
		),
		$client->messagePeerVoteMultiple(
			peer : $client->peerUser(
				user_id : 5678155829312986142,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			date : 85,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 6603090068242124394,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -868733262293325913,
			title : 'ewyTEZ47Ijf92zLQ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 66,
			date : 31,
			version : 66,
			migrated_to : $client->get_input_channel(peer : '@LiveProto'),
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
				until_date : 59,
			),
		),
		$client->chatForbidden(
			id : 5085688646878358533,
			title : 'GtjVChYAuxfDrHZv',
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
			id : 7089638110406945265,
			access_hash : -4442028471766288872,
			title : '8GrMhYHIki3nxBbZ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 59,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'I5w86zcVZa3KShqC',
					reason : '2oVIdPijSKhzl4Ab',
					text : 'JEaHdfQA6meC31Tz',
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
				until_date : 49,
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
				until_date : 55,
			),
			participants_count : 40,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 65,
			),
			color : $client->peerColor(
				color : 83,
				background_emoji_id : -8334018928505609155,
			),
			profile_color : $client->peerColor(
				color : 9,
				background_emoji_id : 997600175217039920,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 16,
			subscription_until_date : 79,
			bot_verification_icon : 2558337425050615031,
			send_paid_messages_stars : -5386577103054755949,
			linked_monoforum_id : -913692860302391716,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -8452956662069606795,
			access_hash : 6406574588974490008,
			title : 'emMQA8VBT73HcENw',
			until_date : 83,
		),
	),
	users : array(
		$client->userEmpty(
			id : 8899965166951558928,
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
			id : 355330652971568981,
			access_hash : 2299094004419021582,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 62,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Oy8XNizIqcMfCSok',
					reason : 'g8U9nHKoSrGi3uyc',
					text : 'N4o9bhntW0lMGOLJ',
				),
			),
			bot_inline_placeholder : 'e4HWRGIE3CkhQD2X',
			lang_code : 'FgIu20pdwzMkJiyo',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 99,
			),
			color : $client->peerColor(
				color : 40,
				background_emoji_id : -5866159172682319953,
			),
			profile_color : $client->peerColor(
				color : 23,
				background_emoji_id : -431323310875833494,
			),
			bot_active_users : 23,
			bot_verification_icon : 6194146884395890728,
			send_paid_messages_stars : 8141754691013747395,
		),
	),
	next_offset : '7t6kR8gKCOxLSYPb',
);
```