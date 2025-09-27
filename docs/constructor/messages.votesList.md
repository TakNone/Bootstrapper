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
				user_id : -6937047135619029755,
			),
			option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			date : 18,
		),
		$client->messagePeerVoteInputOption(
			peer : $client->peerUser(
				user_id : -5209724374725775924,
			),
			date : 37,
		),
		$client->messagePeerVoteMultiple(
			peer : $client->peerUser(
				user_id : 1798281556455673862,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			date : 17,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6390047806269661441,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -4507646741397136076,
			title : 'syLARIBUSu1rOt7N',
			photo : $client->chatPhotoEmpty(),
			participants_count : 80,
			date : 31,
			version : 33,
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
				until_date : 79,
			),
		),
		$client->chatForbidden(
			id : -68645079260229590,
			title : 'Us1iImXcONCrvxM4',
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
			id : 7520304607244929446,
			access_hash : -6545960469065095846,
			title : '6SMP2WFtLl5m9bRq',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 26,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'UP75ILMnR9T8FqWx',
					reason : 'WjtYsTCvmIXAG9de',
					text : 'AMLmv9fcYuD86WHs',
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
				until_date : 21,
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
			participants_count : 99,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 26,
			color : $client->peerColor(
				color : 13,
				background_emoji_id : -837319683313274467,
			),
			profile_color : $client->peerColor(
				color : 93,
				background_emoji_id : -5053877873213475430,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 14,
			subscription_until_date : 55,
			bot_verification_icon : 638321069000660967,
			send_paid_messages_stars : 4389674381494881447,
			linked_monoforum_id : -4414556258873533034,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 5395745354714117061,
			access_hash : 2278357541291202134,
			title : 'znGDpPyCit71UauF',
			until_date : 77,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1980285112735284420,
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
			id : -4377682650162672066,
			access_hash : 7903184088492679675,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 45,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jH4wTi2ZWs0d3Rnp',
					reason : '1jfsEWopuNx3ZDvz',
					text : 'PGsLM36nxQdciBOC',
				),
			),
			bot_inline_placeholder : 'UeaXk6tu42I5QxjN',
			lang_code : 'mP2FolakVD1UQKsZ',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 54,
			color : $client->peerColor(
				color : 87,
				background_emoji_id : 1468918390384260634,
			),
			profile_color : $client->peerColor(
				color : 47,
				background_emoji_id : -1118632121621747409,
			),
			bot_active_users : 92,
			bot_verification_icon : -7351339429883818396,
			send_paid_messages_stars : 2089832626990238287,
		),
	),
	next_offset : 'VD4nx2mZKhXiHW6e',
);
```