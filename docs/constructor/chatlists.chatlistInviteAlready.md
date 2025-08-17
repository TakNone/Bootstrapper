# chatlists.chatlistInviteAlready

**Description** : *Updated info about a chat folder deep link » we already imported*

**Layer** : 211

```tl
chatlists.chatlistInviteAlready#fa87f659 filter_id:int missing_peers:Vector<Peer> already_peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>filter_id</mark> | [`int`](type/int) | ID of the imported folder |
| <mark>missing_peers</mark> | [`Vector<Peer>`](type/Peer) | New peers to be imported |
| <mark>already_peers</mark> | [`Vector<Peer>`](type/Peer) | Peers that were already imported |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Related chat information |
| <mark>users</mark> | [`Vector<User>`](type/User) | Related user information |

---

## Type

[chatlists.ChatlistInvite](type/chatlists.ChatlistInvite)

---

## Example

```php
$chatlistsChatlistInvite = $client->chatlists->chatlistInviteAlready(
	filter_id : 31,
	missing_peers : array(
		$client->peerUser(
			user_id : -799681206105950337,
		),
		$client->peerChat(
			chat_id : 5383227534411215218,
		),
		$client->peerChannel(
			channel_id : -9177462179210736843,
		),
	),
	already_peers : array(
		$client->peerUser(
			user_id : 6906643388520335343,
		),
		$client->peerChat(
			chat_id : 2525095847791982997,
		),
		$client->peerChannel(
			channel_id : 7470853100385704065,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -6785731985858707557,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6625404209816151681,
			title : 'tBeuP2q4iHzk6Cjr',
			photo : $client->chatPhotoEmpty(),
			participants_count : 15,
			date : 14,
			version : 51,
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
				until_date : 15,
			),
		),
		$client->chatForbidden(
			id : 5745259731350069175,
			title : 'e73wGthTzs8REDlc',
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
			id : 6180641491735873659,
			access_hash : 6063240185853121820,
			title : 'ISQ2eRHYEpDLMtmy',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 82,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GyDlz4bPLsSfgZiv',
					reason : 'PocgFkfNqYnO94xE',
					text : 'QSKyCMVcu7Wgda9p',
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
				until_date : 96,
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
				until_date : 64,
			),
			participants_count : 64,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 37,
			color : $client->peerColor(
				color : 52,
				background_emoji_id : 8644644311496025807,
			),
			profile_color : $client->peerColor(
				color : 37,
				background_emoji_id : -7865291632395428905,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 5,
			subscription_until_date : 32,
			bot_verification_icon : -1559350568657532960,
			send_paid_messages_stars : 3652159411263366578,
			linked_monoforum_id : 7345462423019844012,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 4152099106699873898,
			access_hash : -1108505062111744469,
			title : 'rE6NqHFXUQOK0i7k',
			until_date : 63,
		),
	),
	users : array(
		$client->userEmpty(
			id : 3031712333514497936,
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
			id : -8687699534051074461,
			access_hash : 10202075798603538,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 10,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'KSkZVD18yCIAYfT3',
					reason : 'CwxfLc78aWKyHmqu',
					text : 'spdiJOzFjMQy89Tt',
				),
			),
			bot_inline_placeholder : 'pe7bon3O0Aqv9ExB',
			lang_code : 'iFt9k0vRD5d2q7oy',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 45,
			color : $client->peerColor(
				color : 67,
				background_emoji_id : -3493576202466193457,
			),
			profile_color : $client->peerColor(
				color : 6,
				background_emoji_id : 2699416163596675808,
			),
			bot_active_users : 28,
			bot_verification_icon : -2401806472199280824,
			send_paid_messages_stars : 6799716787939718322,
		),
	),
);
```