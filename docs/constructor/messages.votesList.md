# messages.votesList

**Description** : *How users voted in a poll*

**Layer** : 214

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
	count : 64,
	votes : array(
		$client->messagePeerVote(
			peer : $client->peerUser(
				user_id : -3865542280221492985,
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 97,
		),
		$client->messagePeerVoteInputOption(
			peer : $client->peerUser(
				user_id : 8922641883584979023,
			),
			date : 55,
		),
		$client->messagePeerVoteMultiple(
			peer : $client->peerUser(
				user_id : 7395884803251674096,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			date : 25,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 1259937816877685244,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -7570731206000864621,
			title : 'wFsORt4KDTf0MljS',
			photo : $client->chatPhotoEmpty(),
			participants_count : 22,
			date : 54,
			version : 1,
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
				until_date : 38,
			),
		),
		$client->chatForbidden(
			id : 5461969592760158797,
			title : 'ITLzc3y8r9MgZdJB',
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
			id : -4096157337262774062,
			access_hash : 8650302478210603897,
			title : 'OIXVyknQ4lLar5ZJ',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 74,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'uNqpnF0BZmS6XtkV',
					reason : 'fGH3lPLCi0FsDMwm',
					text : 'X0fdvuiH45Ry71Cj',
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
				until_date : 72,
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
				until_date : 50,
			),
			participants_count : 65,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 80,
			color : $client->peerColor(
				color : 63,
				background_emoji_id : 3193233163249110872,
			),
			profile_color : $client->peerColor(
				color : 0,
				background_emoji_id : -8025561418766828100,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 50,
			subscription_until_date : 27,
			bot_verification_icon : -4647109520578893297,
			send_paid_messages_stars : -6916695178773329000,
			linked_monoforum_id : 8770411600729415907,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 1911351833940096527,
			access_hash : 615072092947658661,
			title : 'QOFbpgesq17T4yoK',
			until_date : 87,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1969297801881338902,
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
			id : 2815549236666780559,
			access_hash : -5604253398594586008,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 80,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Dy2Tk0RQXOF3qf5K',
					reason : 'EQhGM6XZtqzl0D5s',
					text : 'tRqWzPSE8vDTZCJ5',
				),
			),
			bot_inline_placeholder : 'E7Fv85wmJ6dSuBLP',
			lang_code : 'RGmIWjbcuypfUOeN',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 81,
			color : $client->peerColor(
				color : 61,
				background_emoji_id : 2162074925455733436,
			),
			profile_color : $client->peerColor(
				color : 80,
				background_emoji_id : 2093236484023661038,
			),
			bot_active_users : 42,
			bot_verification_icon : 4220801815639464349,
			send_paid_messages_stars : 3730958525218335464,
		),
	),
	next_offset : 'obZwOdaTvskBzWKe',
);
```