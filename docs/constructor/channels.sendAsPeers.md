# channels.sendAsPeers

**Description** : *A list of peers that can be used to send messages in a specific group*

**Layer** : 214

```tl
channels.sendAsPeers#f496b0c6 peers:Vector<SendAsPeer> chats:Vector<Chat> users:Vector<User> = channels.SendAsPeers;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peers</mark> | [`Vector<SendAsPeer>`](type/SendAsPeer) | Peers that can be used to send messages to the group |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Mentioned chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Mentioned users |

---

## Type

[channels.SendAsPeers](type/channels.SendAsPeers)

---

## Example

```php
$channelsSendAsPeers = $client->channels->sendAsPeers(
	peers : array(
		$client->sendAsPeer(
			premium_required : true,
			peer : $client->peerUser(
				user_id : 3657873306762464744,
			),
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -7745226682214640061,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8494925059660115386,
			title : 'lt9FLkHZQc20GCKR',
			photo : $client->chatPhotoEmpty(),
			participants_count : 49,
			date : 74,
			version : 29,
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
				until_date : 47,
			),
		),
		$client->chatForbidden(
			id : 5904633358299183771,
			title : 'XhLtdNzBR7AZUQsf',
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
			id : 1593416625871583412,
			access_hash : 7356496842091230032,
			title : 'TcoJlzgD5isnjxwf',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 98,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'AavIuzR25ZBSEo8e',
					reason : '7vZmKbI3NuARJY0n',
					text : 'iuSZnoslUmhNaHLJ',
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
				until_date : 68,
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
				until_date : 93,
			),
			participants_count : 33,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 79,
			color : $client->peerColor(
				color : 47,
				background_emoji_id : -2048655174061967429,
			),
			profile_color : $client->peerColor(
				color : 41,
				background_emoji_id : -6632679474180045382,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 85,
			subscription_until_date : 58,
			bot_verification_icon : -7886179403813367667,
			send_paid_messages_stars : 7518049915976766717,
			linked_monoforum_id : 3561536231186524997,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6337888000817311386,
			access_hash : -6042543237918951396,
			title : 'BoyMgRH5uJ2OeTNP',
			until_date : 32,
		),
	),
	users : array(
		$client->userEmpty(
			id : -1690541755332661298,
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
			id : 6834865011650171182,
			access_hash : -2412620247765014293,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'uwIzUOHqFxe7K1cs',
					reason : 'YBqUdwIS823LXQKA',
					text : 'tA3MsgVx8K9SN5bm',
				),
			),
			bot_inline_placeholder : 'wkPfWhSj5FL8mZ3C',
			lang_code : '3lYKnCsmpNL2aFwi',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 52,
			color : $client->peerColor(
				color : 72,
				background_emoji_id : 1107350512039580648,
			),
			profile_color : $client->peerColor(
				color : 87,
				background_emoji_id : -1557260804619103926,
			),
			bot_active_users : 82,
			bot_verification_icon : -2541535494238402630,
			send_paid_messages_stars : -3160197006463292297,
		),
	),
);
```