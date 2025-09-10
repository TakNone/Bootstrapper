# messages.messageReactionsList

**Description** : *List of peers that reacted to a specific message*

**Layer** : 214

```tl
messages.messageReactionsList#31bd492d flags:# count:int reactions:Vector<MessagePeerReaction> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = messages.MessageReactionsList;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>count</mark> | [`int`](type/int) | Total number of reactions matching query |
| <mark>reactions</mark> | [`Vector<MessagePeerReaction>`](type/MessagePeerReaction) | List of peers that reacted to a specific message |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |
| **next_offset** | [`flags.0?string`](type/string) | If set, indicates the next offset to use to load more results by invoking messages.getMessageReactionsList |

---

## Type

[messages.MessageReactionsList](type/messages.MessageReactionsList)

---

## Example

```php
$messagesMessageReactionsList = $client->messages->messageReactionsList(
	count : 48,
	reactions : array(
		$client->messagePeerReaction(
			big : true,
			unread : true,
			my : true,
			peer_id : $client->peerUser(
				user_id : -1962881039017466467,
			),
			date : 48,
			reaction : $client->reactionEmpty(),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 8723608499536582423,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 2689539670061361914,
			title : 'Pt0FaOg7lZohWkxJ',
			photo : $client->chatPhotoEmpty(),
			participants_count : 3,
			date : 24,
			version : 55,
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
				until_date : 60,
			),
		),
		$client->chatForbidden(
			id : -2895098680325730096,
			title : 'NXb6ExgRtDcqQTiA',
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
			id : 3397997538678649105,
			access_hash : 2335368118577339350,
			title : 'bXu4y5E98hewUKGB',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 37,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'jrQVaL1N6JnXxftI',
					reason : 'sX1QJU2Bd45kWnrG',
					text : '4aKm68L7kJjHiF1v',
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
				until_date : 89,
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
				until_date : 0,
			),
			participants_count : 53,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 47,
			color : $client->peerColor(
				color : 70,
				background_emoji_id : -3679044437067025077,
			),
			profile_color : $client->peerColor(
				color : 16,
				background_emoji_id : 1262433432304905336,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 41,
			subscription_until_date : 71,
			bot_verification_icon : 8805592747777594018,
			send_paid_messages_stars : -5328140418898142228,
			linked_monoforum_id : 2516915594577629688,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4477715474038814001,
			access_hash : -5036559668977788659,
			title : 'L2kSYq7iAfxRXpsI',
			until_date : 79,
		),
	),
	users : array(
		$client->userEmpty(
			id : -8155261109969737299,
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
			id : 4773252701987444395,
			access_hash : 7866971617624242055,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 10,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '4AVgsUtKR1C0OIJB',
					reason : '8ewdWz5R7x2ZYgnS',
					text : 'uTGbNeApHXkzUVYa',
				),
			),
			bot_inline_placeholder : 'JqHwh7cbXBi5uPLn',
			lang_code : 'V1yQiz3F8egurmwc',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 34,
			color : $client->peerColor(
				color : 4,
				background_emoji_id : -1698363673113431832,
			),
			profile_color : $client->peerColor(
				color : 81,
				background_emoji_id : 7503369668262550834,
			),
			bot_active_users : 46,
			bot_verification_icon : 5542039364523457411,
			send_paid_messages_stars : -6348810910949134588,
		),
	),
	next_offset : 'IEehk8Tt1M4zPgKw',
);
```