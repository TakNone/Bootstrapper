# chatlists.chatlistInviteAlready

**Description** : *Updated info about a chat folder deep link &raquo; we already imported*

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
	filter_id : 68,
	missing_peers : array(
		$client->peerUser(
			user_id : -5237366014734587268,
		),
		$client->peerChat(
			chat_id : 7471174232589209765,
		),
		$client->peerChannel(
			channel_id : 7959321487930816769,
		),
	),
	already_peers : array(
		$client->peerUser(
			user_id : -5914015608512663342,
		),
		$client->peerChat(
			chat_id : 1939560990472230199,
		),
		$client->peerChannel(
			channel_id : 2618964977043414249,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : 951590832043001952,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 6551483537479698591,
			title : 'sOfDRc2jMvV6a79d',
			photo : $client->chatPhotoEmpty(),
			participants_count : 32,
			date : 25,
			version : 70,
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
				until_date : 16,
			),
		),
		$client->chatForbidden(
			id : 6736688396048744832,
			title : 'msBcouC2bZD7vMGT',
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
			id : 4053209039397296250,
			access_hash : -4101020256146757446,
			title : 'TeZg1iFhsbuzp67n',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 6,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'QMB2wZOHjJulL6UP',
					reason : 'dyeNfV5PFnYEGu4t',
					text : 'FWOgby1DV36pKIwB',
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
				until_date : 39,
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
				until_date : 35,
			),
			participants_count : 39,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 79,
			color : $client->peerColor(
				color : 69,
				background_emoji_id : -3901441348042967282,
			),
			profile_color : $client->peerColor(
				color : 22,
				background_emoji_id : -840522194327225646,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 93,
			subscription_until_date : 78,
			bot_verification_icon : -3584169455119196485,
			send_paid_messages_stars : -4735361675437939641,
			linked_monoforum_id : -2745084480614835010,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : -6477226645521446849,
			access_hash : 6864394035146192593,
			title : 'SReQ17CXj2yp4ard',
			until_date : 78,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2952419550083547800,
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
			id : 7817959156822881486,
			access_hash : 402332521935857551,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 20,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'GVrbyZdK2ONX7BjU',
					reason : 'joiBt6rOmqdNJ35w',
					text : 'YRwdqh8VHiyQu4Eo',
				),
			),
			bot_inline_placeholder : '7NezxXktH64wCUbV',
			lang_code : '1BRphyfdzlcXe3Ej',
			emoji_status : $client->emojiStatusEmpty(),
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : 1,
			color : $client->peerColor(
				color : 38,
				background_emoji_id : 610044006542240237,
			),
			profile_color : $client->peerColor(
				color : 57,
				background_emoji_id : 2288928866356458500,
			),
			bot_active_users : 99,
			bot_verification_icon : -6439879455196887457,
			send_paid_messages_stars : -5818517936503732030,
		),
	),
);
```