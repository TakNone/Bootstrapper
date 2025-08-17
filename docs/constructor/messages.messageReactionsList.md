# messages.messageReactionsList

**Description** : *List of peers that reacted to a specific message*

**Layer** : 211

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
	count : 74,
	reactions : array(
		$client->messagePeerReaction(
			big : true,
			unread : true,
			my : true,
			peer_id : $client->peerUser(
				user_id : 3381745045599057094,
			),
			date : 50,
			reaction : $client->reactionEmpty(),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -718553559607086542,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 9031053856697157639,
			title : 'BXMxpfQmIb0yrC5w',
			photo : $client->chatPhotoEmpty(),
			participants_count : 50,
			date : 17,
			version : 34,
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
				until_date : 90,
			),
		),
		$client->chatForbidden(
			id : -6798826596160226255,
			title : 'FXON7n4Zej16RdwI',
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
			id : 5733975407741803468,
			access_hash : -1378474023523919940,
			title : 'N4EQwJVXjl9HSfAt',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'vXr3mTfRgLAPh4zE',
					reason : 'UESvfeVsRHWl7KPM',
					text : 'hZOgWe9TaE8yCw75',
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
				until_date : 29,
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
			participants_count : 21,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 3,
			color : $client->peerColor(
				color : 28,
				background_emoji_id : -3507919069153415608,
			),
			profile_color : $client->peerColor(
				color : 24,
				background_emoji_id : -5538713682192905884,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 4,
			subscription_until_date : 4,
			bot_verification_icon : -7201219856286792000,
			send_paid_messages_stars : 106130484345458807,
			linked_monoforum_id : 8577933713166726822,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -7465351576075017841,
			access_hash : 4741750992524926261,
			title : 'STBp3mLNlV2w1ykM',
			until_date : 97,
		),
	),
	users : array(
		$client->userEmpty(
			id : 1378957747904389021,
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
			id : 8704530757395709837,
			access_hash : -384672630803543760,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 98,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'f0y4XH7isTCQEGaJ',
					reason : 'UfFLuAnrwQHxy4Sz',
					text : 'ow6cvpr0uFJ89zhN',
				),
			),
			bot_inline_placeholder : 'Eln90B6DwkiSFP58',
			lang_code : 'oka93Q2FAWYTJHbu',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 55,
			color : $client->peerColor(
				color : 0,
				background_emoji_id : 5341167341916475072,
			),
			profile_color : $client->peerColor(
				color : 74,
				background_emoji_id : -3377551709412227447,
			),
			bot_active_users : 52,
			bot_verification_icon : 2069681206707759348,
			send_paid_messages_stars : 2949324657511897005,
		),
	),
	next_offset : 'EJTcMxz4IWjRO7P0',
);
```