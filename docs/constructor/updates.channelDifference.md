# updates.channelDifference

**Description** : *The new updates*

**Layer** : 225

```tl
updates.channelDifference#2064674e flags:# final:flags.0?true pts:int timeout:flags.1?int new_messages:Vector<Message> other_updates:Vector<Update> chats:Vector<Chat> users:Vector<User> = updates.ChannelDifference;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **final** | [`flags.0?true`](type/true) | Whether there are more updates to be fetched using getDifference, starting from the provided pts |
| <mark>pts</mark> | [`int`](type/int) | The PTS from which to start getting updates the next time |
| **timeout** | [`flags.1?int`](type/int) | Clients are supposed to refetch the channel difference after timeout seconds have elapsed, if the user is currently viewing the chat, see here » for more info |
| <mark>new_messages</mark> | [`Vector<Message>`](type/Message) | New messages |
| <mark>other_updates</mark> | [`Vector<Update>`](type/Update) | Other updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | Chats |
| <mark>users</mark> | [`Vector<User>`](type/User) | Users |

---

## Type

[updates.ChannelDifference](type/updates.ChannelDifference)

---

## Example

```php
$updatesChannelDifference = $client->updates->channelDifference(
	final : true,
	pts : 15,
	timeout : 91,
	new_messages : array(
		$client->messageEmpty(
			id : 4,
			peer_id : $client->peerUser(
				user_id : 7833540798628247640,
			),
		),
		$client->message(
			out : true,
			mentioned : true,
			media_unread : true,
			silent : true,
			post : true,
			from_scheduled : true,
			legacy : true,
			edit_hide : true,
			pinned : true,
			noforwards : true,
			invert_media : true,
			offline : true,
			video_processing_pending : true,
			paid_suggested_post_stars : true,
			paid_suggested_post_ton : true,
			id : 61,
			from_id : $client->peerUser(
				user_id : -4767069931132699950,
			),
			from_boosts_applied : 73,
			from_rank : 'nE5d2TXNUzM4jBaW',
			peer_id : $client->peerUser(
				user_id : 4552003761062719380,
			),
			saved_peer_id : $client->peerUser(
				user_id : 3472786106897809051,
			),
			fwd_from : $client->messageFwdHeader(
				imported : true,
				saved_out : true,
				from_id : $client->peerUser(
					user_id : 4731509942035159043,
				),
				from_name : 'wGdYOmuo7TIZe8ba',
				date : 32,
				channel_post : 24,
				post_author : 'UXAzFu1BOoG2SVDm',
				saved_from_peer : $client->peerUser(
					user_id : 8222714478619344028,
				),
				saved_from_msg_id : 90,
				saved_from_id : $client->peerUser(
					user_id : -6373006510134858005,
				),
				saved_from_name : '4dF0eThkxAQPIcSL',
				saved_date : 33,
				psa_type : 'Yn8wUVfaqJKHOksR',
			),
			via_bot_id : -4266365251776268232,
			via_business_bot_id : -7366450998119817666,
			guestchat_via_from : $client->peerUser(
				user_id : 1984534722183782522,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 50,
				reply_to_peer_id : $client->peerUser(
					user_id : -5349558495758438362,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '3WuK5EIfZxeh0V46',
					date : 15,
					channel_post : 92,
					post_author : '1nxWagtcBVjGJ648',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 75,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'rTvIWt63hRkBKiEn',
					saved_date : 31,
					psa_type : 'Qpdm9sBCPVja8Dgv',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 20,
				quote_text : 'qEQGrP4wBI1fXTpW',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 38,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 26,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 30,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 75,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 93,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 66,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 94,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 68,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 67,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 49,
						language : '8HTicZ9LCG5SVpks',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 91,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 74,
						user_id : 1426048821723153332,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 9,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 91,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 100,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 80,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 1,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 9,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 96,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 11,
						document_id : -102342112708557464,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 93,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 83,
						date : 17,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 69,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 34,
						old_text : 'FDnYairj4hUExkcy',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 80,
					),
				),
				quote_offset : 70,
				todo_item_id : 74,
				poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			date : 32,
			message : 'xSoL8gpisUMKCa0v',
			media : $client->messageMediaEmpty(),
			reply_markup : $client->replyKeyboardHide(
				selective : true,
			),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 30,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 35,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 74,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 67,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 96,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 62,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 100,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 9,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 45,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 89,
					language : 'vWEG7Yb0NJ91FL2h',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 53,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 47,
					user_id : -6265976789615372507,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 81,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 45,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 59,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 70,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 19,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 25,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 24,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 61,
					document_id : 1248461073294644723,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 39,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 7,
					date : 91,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 62,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 44,
					old_text : 'SOQPws36ilT0j71F',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 94,
				),
			),
			views : 65,
			forwards : 18,
			replies : $client->messageReplies(
				comments : true,
				replies : 63,
				replies_pts : 49,
				recent_repliers : array(
					$client->peerUser(
						user_id : -4365384575222804526,
					),
					$client->peerChat(
						chat_id : -6297909150311590982,
					),
					$client->peerChannel(
						channel_id : -5415772694376135155,
					),
				),
				channel_id : -474269847980344463,
				max_id : 2,
				read_max_id : 71,
			),
			edit_date : 90,
			post_author : 'HiW5Lav09z4ZOej2',
			grouped_id : -2468999748188069064,
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 6,
						reaction : $client->reactionEmpty(...),
						count : 26,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 10,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 62,
					),
				),
			),
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'dJSthqfYA805cy1F',
					reason : 'kGCyreutWfvPNg2w',
					text : '5EuWjgmrSOqTDNMY',
				),
			),
			ttl_period : 58,
			quick_reply_shortcut_id : 92,
			effect : -5254031215471495709,
			factcheck : $client->factCheck(
				need_check : true,
				country : '7SoEBRbrW85vwGTQ',
				text : $client->textWithEntities(
					text : '6wfAYFe2GpJbPqo8',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				hash : 0,
			),
			report_delivery_until_date : 35,
			paid_message_stars : -8380456018033185747,
			suggested_post : $client->suggestedPost(
				accepted : true,
				rejected : true,
				price : $client->starsAmount(
					amount : -8497068668103683755,
					nanos : 83,
				),
				schedule_date : 30,
			),
			schedule_repeat_period : 94,
			summary_from_language : 'wAzSt065iY78EFuv',
		),
		$client->messageService(
			out : true,
			mentioned : true,
			media_unread : true,
			reactions_are_possible : true,
			silent : true,
			post : true,
			legacy : true,
			id : 40,
			from_id : $client->peerUser(
				user_id : 417656867035640685,
			),
			peer_id : $client->peerUser(
				user_id : -3801221714744816451,
			),
			saved_peer_id : $client->peerUser(
				user_id : 8871500584603208052,
			),
			reply_to : $client->messageReplyHeader(
				reply_to_scheduled : true,
				forum_topic : true,
				quote : true,
				reply_to_msg_id : 1,
				reply_to_peer_id : $client->peerUser(
					user_id : -2841859168011761592,
				),
				reply_from : $client->messageFwdHeader(
					imported : true,
					saved_out : true,
					from_id : $client->peerUser(...),
					from_name : '3QmhcIFabzZrSELW',
					date : 70,
					channel_post : 74,
					post_author : 'zEPB2acY8ZwuNUlj',
					saved_from_peer : $client->peerUser(...),
					saved_from_msg_id : 12,
					saved_from_id : $client->peerUser(...),
					saved_from_name : 'i7r5gFWSCcAXmlLY',
					saved_date : 73,
					psa_type : 'zE6JyaTuLBx2cAm1',
				),
				reply_media : $client->messageMediaEmpty(),
				reply_to_top_id : 50,
				quote_text : 'yi6dIq7Mh3v4BNcm',
				quote_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 32,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 1,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 38,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 30,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 73,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 1,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 48,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 43,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 31,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 71,
						language : 'qXcrKzlbegTN5LuB',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 82,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 24,
						user_id : 6878879320119179768,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 94,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 80,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 61,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 42,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 25,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 82,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 74,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 78,
						document_id : 5286065628936926633,
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
						length : 28,
						date : 64,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 64,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 99,
						old_text : 'b2X6HdpPntDhfx7O',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 8,
					),
				),
				quote_offset : 69,
				todo_item_id : 22,
				poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			),
			date : 41,
			action : $client->messageActionEmpty(),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 67,
						reaction : $client->reactionEmpty(...),
						count : 40,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 9,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 29,
					),
				),
			),
			ttl_period : 84,
		),
	),
	other_updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 24,
				peer_id : $client->peerUser(
					user_id : -7089797724078011517,
				),
			),
			pts : 71,
			pts_count : 44,
		),
		$client->updateMessageID(
			id : 3,
			random_id : 1092728658599660161,
		),
		$client->updateDeleteMessages(
			messages : array(10),
			pts : 45,
			pts_count : 52,
		),
		$client->updateUserTyping(
			user_id : 4995965625978854071,
			top_msg_id : 65,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -5338507760195703980,
			from_id : $client->peerUser(
				user_id : 5872226164034406715,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : 8391004066117962136,
				self_participant : $client->chatParticipant(
					user_id : 8483465036793132599,
					inviter_id : -8134364745487833521,
					date : 5,
					rank : 'uymDA41nE20YZPx7',
				),
			),
		),
		$client->updateUserStatus(
			user_id : -7435623014811631576,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : 2174997403789378943,
			first_name : 'Tak',
			last_name : 'None',
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
		),
		$client->updateNewAuthorization(
			unconfirmed : true,
			hash : 0,
			date : 23,
			device : 'zWEaLVoxqTt9jYUp',
			location : 'Cem3Hpdu7S50RFKB',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -8565293823516685192,
				chat_id : 2,
				date : 64,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 66,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 82,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 24,
			),
			date : 97,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 27,
			max_date : 71,
			date : 36,
		),
		$client->updateChatParticipantAdd(
			chat_id : -3265298817619190649,
			user_id : 419064635833192795,
			inviter_id : -3421797382458610209,
			date : 9,
			version : 86,
		),
		$client->updateChatParticipantDelete(
			chat_id : -6055139698662321968,
			user_id : -6833280314447515556,
			version : 24,
		),
		$client->updateDcOptions(
			dc_options : array(
				$client->dcOption(
					ipv6 : true,
					media_only : true,
					tcpo_only : true,
					cdn : true,
					static : true,
					this_port_only : true,
					id : 33,
					ip_address : '127.0.0.1',
					port : 56,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : -6568795748075378220,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : true,
				silent : true,
				mute_until : 4,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : true,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 65,
			type : '5jFEnalvbkTYWme9',
			message : '34Hq2rwVYKF6piuG',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 59,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 57,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 39,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 2,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 78,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 22,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 8,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 39,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 20,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 67,
					language : 'zKe1Igx28vbNjcW5',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 52,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 97,
					user_id : -1401411888505603982,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 88,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 90,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 92,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 38,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 95,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 2,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 31,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 78,
					document_id : 4765241965298815392,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 69,
				),
				$client->messageEntityFormattedDate(
					relative : true,
					short_time : true,
					long_time : true,
					short_date : true,
					long_date : true,
					day_of_week : true,
					offset : 0,
					length : 51,
					date : 63,
				),
				$client->messageEntityDiffInsert(
					offset : 0,
					length : 12,
				),
				$client->messageEntityDiffReplace(
					offset : 0,
					length : 35,
					old_text : 'qmrDZ3Hj7A28hNns',
				),
				$client->messageEntityDiffDelete(
					offset : 0,
					length : 47,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(9181574031820567573),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(2476730333223665942),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(-5881656478107990953),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(4630009371475805242),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : 5290922295418373110,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 9,
			peer : $client->peerUser(
				user_id : 6375500036618937366,
			),
			top_msg_id : 20,
			max_id : 69,
			still_unread_count : 58,
			pts : 56,
			pts_count : 23,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : -6362491369922765838,
			),
			max_id : 63,
			pts : 47,
			pts_count : 11,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : 9123504953675532999,
				url : 'https://docs.liveproto.dev',
			),
			pts : 22,
			pts_count : 12,
		),
		$client->updateReadMessagesContents(
			messages : array(73),
			pts : 37,
			pts_count : 20,
			date : 40,
		),
		$client->updateChannelTooLong(
			channel_id : -4810614010548305104,
			pts : 47,
		),
		$client->updateChannel(
			channel_id : -4584970767029582946,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 51,
				peer_id : $client->peerUser(
					user_id : 2152640606157845984,
				),
			),
			pts : 72,
			pts_count : 11,
		),
		$client->updateReadChannelInbox(
			folder_id : 35,
			channel_id : -6189764668579533563,
			max_id : 6,
			still_unread_count : 47,
			pts : 96,
		),
		$client->updateDeleteChannelMessages(
			channel_id : 462974437805130180,
			messages : array(3),
			pts : 70,
			pts_count : 86,
		),
		$client->updateChannelMessageViews(
			channel_id : 6531919444505637526,
			id : 97,
			views : 86,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 4701445127394073856,
			user_id : 6676093759441877148,
			is_admin : true,
			version : 50,
		),
		$client->updateNewStickerSet(
			stickerset : $client->messages->stickerSet(
				set : $client->stickerSet(
					archived : true,
					official : true,
					masks : true,
					emojis : true,
					text_color : true,
					channel_emoji_status : true,
					creator : true,
					installed_date : 31,
					id : -9053143367995719242,
					access_hash : 7536765973266539697,
					title : 'xnGiZgMPhSdkBc7Q',
					short_name : 'A8FUO4sIG7NSuTKY',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 5,
					thumb_version : 70,
					thumb_document_id : -1781626204492094935,
					count : 56,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : 'cfiM8N02LH9RjJw3',
						documents : array(-8326925042049859905),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : 496542771918517937,
						keyword : array('Mzy6PwlHY0Jn7Z8v'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : 7669418905236664423,
					),
					$client->document(
						id : -6914432026893905046,
						access_hash : -5315676606697823332,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 6,
						mime_type : 'QL5leFoNIv362Vxp',
						size : -1945221318176945938,
						thumbs : array(
							$client->photoSizeEmpty(...),
							$client->photoSize(...),
							$client->photoCachedSize(...),
							$client->photoStrippedSize(...),
							$client->photoSizeProgressive(...),
							$client->photoPathSize(...),
						),
						video_thumbs : array(
							$client->videoSize(...),
							$client->videoSizeEmojiMarkup(...),
							$client->videoSizeStickerMarkup(...),
						),
						dc_id : 1,
						attributes : array(
							$client->documentAttributeImageSize(...),
							$client->documentAttributeAnimated(...),
							$client->documentAttributeSticker(...),
							$client->documentAttributeVideo(...),
							$client->documentAttributeAudio(...),
							$client->documentAttributeFilename(...),
							$client->documentAttributeHasStickers(...),
							$client->documentAttributeCustomEmoji(...),
						),
					),
				),
			),
		),
		$client->updateStickerSetsOrder(
			masks : true,
			emojis : true,
			order : array(4125263856426395967),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 5812524781511791529,
			user_id : -6887346029905944334,
			query : 'jSDKJI9cgfuvoV7e',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'KH52wOxsZU7SJ3vV',
		),
		$client->updateBotInlineSend(
			user_id : -3133439546883812441,
			query : '2x71wEl5FCoJ3Teh',
			geo : $client->geoPointEmpty(),
			id : '0gGCnQkKzawN3leX',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 52,
				id : -6109141737196893203,
				access_hash : -6314752598837647458,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 78,
				peer_id : $client->peerUser(
					user_id : -7389820660645176130,
				),
			),
			pts : 13,
			pts_count : 41,
		),
		$client->updateBotCallbackQuery(
			query_id : 4020799632288556436,
			user_id : -1760763935565562422,
			peer : $client->peerUser(
				user_id : 8105075493959573761,
			),
			msg_id : 24,
			chat_instance : 1966310960487779580,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : '6K0cWSmwGyCOYPxk',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 23,
				peer_id : $client->peerUser(
					user_id : 3456085570434585324,
				),
			),
			pts : 21,
			pts_count : 74,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 967343369037714561,
			user_id : -2126476842776648189,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 63,
				id : 3603437227522662541,
				access_hash : -2114072190513364039,
			),
			chat_instance : -525561064231036478,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'NDLqJEOTpwFaRyKf',
		),
		$client->updateReadChannelOutbox(
			channel_id : -8853369718152310441,
			max_id : 54,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : 2651350940751125441,
			),
			top_msg_id : 33,
			saved_peer_id : $client->peerUser(
				user_id : 183132678254090420,
			),
			draft : $client->draftMessageEmpty(
				date : 98,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : 6682906085444684389,
			webpage : $client->webPageEmpty(
				id : 1626638686256021770,
				url : 'https://docs.liveproto.dev',
			),
			pts : 32,
			pts_count : 71,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 36,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -2171780341640487521,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 96,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 5728891717093951713,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 10,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'Yb5NVZRx1i34UsnO',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : 5015997631925540689,
			data : $client->dataJSON(
				data : 'xzIrRmBUsLHtaCeQ',
			),
			timeout : 95,
		),
		$client->updateBotShippingQuery(
			query_id : -6364971051071328637,
			user_id : 7201727807101946544,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'VIRctpnTOa7Xm4DJ',
				street_line2 : 'AFR4lbGH0DSXseha',
				city : '5R1CEawfSqMXKPNs',
				state : 'gGlbcRDPW9iwpE70',
				country_iso2 : '2w3YR5iphNXjQ0ql',
				post_code : 'IJQd9nRY3xeMolsO',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : 2317792350095814366,
			user_id : 8121095292934338636,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : '9T2qG8l7odFMZg5a',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'hiIxrRBJznojSp8c',
					street_line2 : 'KMEAjJusGxYe97Bp',
					city : 'vfGZz5J1DORFlPqH',
					state : 'EXdspvg2P7WleqNc',
					country_iso2 : 'rOHImnlGCPyQLKYR',
					post_code : 'WK6jAkEIsOb1tNGp',
				),
			),
			shipping_option_id : 'dpDN5s1RCK8ngjU6',
			currency : 'k1B36pnLj2VMO7Nl',
			total_amount : -2238716943718832360,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : -3028316385476730453,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : 'mHK6hpxWqsC4390Q',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : '3JLQe9YEZnpKurXW',
				from_version : 59,
				version : 21,
				strings : array(
					$client->langPackString(
						key : 'iekgwf3WDJTl2X0n',
						value : 'ND3S1yaiG952WqCI',
					),
					$client->langPackStringPluralized(
						key : 'GinvSJCH5xeyr2g4',
						zero_value : 'WojpyBQIelYh8zrn',
						one_value : 'jLRk6KgyebJt8vm3',
						two_value : 'cDqEp9oTXk1Qtiz8',
						few_value : 'zhXH51OTlCPZUWtv',
						many_value : 'zKfdGpik412I5aNb',
						other_value : '4xbcmnLBOXeYtoSI',
					),
					$client->langPackStringDeleted(
						key : 'JZOVnMhw1so2prv5',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : 198234057952792210,
			top_msg_id : 17,
			saved_peer_id : $client->peerUser(
				user_id : 7583912506958333915,
			),
			messages : array(50),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : 3185975620848827994,
			available_min_id : 84,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 6619819971194797923,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : -1287081979426636766,
			),
		),
		$client->updateMessagePoll(
			peer : $client->peerUser(
				user_id : 996121656216125156,
			),
			msg_id : 38,
			top_msg_id : 44,
			poll_id : -545480485942716119,
			poll : $client->poll(
				id : 4382334982828088529,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				open_answers : true,
				revoting_disabled : true,
				shuffle_answers : true,
				hide_results_until_close : true,
				creator : true,
				subscribers_only : true,
				question : $client->textWithEntities(
					text : 'Mrb4a1njilwKftpC',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						media : $client->messageMediaEmpty(...),
						added_by : $client->peerUser(...),
						date : 53,
					),
					$client->inputPollAnswer(
						text : $client->textWithEntities(...),
						media : $client->get_input_media_uploaded(path : 'file.mp4',file_type : Tak\Liveproto\Enums\FileType::DOCUMENT),
					),
				),
				close_period : 0,
				close_date : 15,
				countries_iso2 : array('Nbml2uskMtKvSrwJ'),
				hash : 0,
			),
			results : $client->pollResults(
				min : true,
				has_unread_votes : true,
				can_view_stats : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 92,
						recent_voters : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
					),
				),
				total_voters : 34,
				recent_voters : array(
					$client->peerUser(
						user_id : -388031782651540456,
					),
					$client->peerChat(
						chat_id : -220264264774585876,
					),
					$client->peerChannel(
						channel_id : 7717293752554086617,
					),
				),
				solution : 'JQZqalcjVdh8zIK5',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 33,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 10,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 69,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 21,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 48,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 94,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 45,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 93,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 2,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 50,
						language : 'jwaolrD0H9PFCcnf',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 56,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 34,
						user_id : -3707737212186260518,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 57,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 44,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 37,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 25,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 26,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 98,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 43,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 25,
						document_id : -5978906387941394186,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 66,
					),
					$client->messageEntityFormattedDate(
						relative : true,
						short_time : true,
						long_time : true,
						short_date : true,
						long_date : true,
						day_of_week : true,
						offset : 0,
						length : 77,
						date : 33,
					),
					$client->messageEntityDiffInsert(
						offset : 0,
						length : 66,
					),
					$client->messageEntityDiffReplace(
						offset : 0,
						length : 91,
						old_text : 'ts6oedaS4JrFkPYq',
					),
					$client->messageEntityDiffDelete(
						offset : 0,
						length : 29,
					),
				),
				solution_media : $client->messageMediaEmpty(),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : -3990082282339694352,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 23,
			),
			version : 51,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : 5218110843154686134,
					),
					folder_id : 50,
				),
			),
			pts : 25,
			pts_count : 72,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : 4111946556066313054,
			),
			settings : $client->peerSettings(
				report_spam : true,
				add_contact : true,
				block_contact : true,
				share_contact : true,
				need_contacts_exception : true,
				report_geo : true,
				autoarchived : true,
				invite_members : true,
				request_chat_broadcast : true,
				business_bot_paused : true,
				business_bot_can_reply : true,
				geo_distance : 45,
				request_chat_title : 'xAVw45Z6LHIPbdv9',
				request_chat_date : 42,
				business_bot_id : 7062625211578624913,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : -7508491053614999144,
				registration_month : 'R20izZsekGEAIJgT',
				phone_country : '+1234567890',
				name_change_date : 26,
				photo_change_date : 82,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 1786642586284426163,
					),
					expires : 33,
					distance : 89,
				),
				$client->peerSelfLocated(
					expires : 81,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 37,
				peer_id : $client->peerUser(
					user_id : -4549985423582598838,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -4370747812336002503,
			),
			messages : array(86),
			sent_messages : array(1),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : -1852767915651538391,
				access_hash : 7205483446479256458,
				slug : 'swzOCopvGcRMTq1Z',
				title : 'N3w2yPzWVYUFe6Mq',
				document : $client->documentEmpty(
					id : 5455110495798471563,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 32,
						outbox_accent_color : 95,
						message_colors : array(22),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : '7gYAZxNvrE9WShDO',
				installs_count : 70,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -2262208547650339150,
			),
			msg_id : 85,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : 2302030876833328732,
			peer : $client->peerUser(
				user_id : 8876012730376709297,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			positions : array(51),
			qts : 58,
		),
		$client->updateDialogFilter(
			id : 29,
			filter : $client->dialogFilter(
				contacts : true,
				non_contacts : true,
				groups : true,
				broadcasts : true,
				bots : true,
				exclude_muted : true,
				exclude_read : true,
				exclude_archived : true,
				title_noanimate : true,
				id : 52,
				title : $client->textWithEntities(
					text : 'aIPJfyFWtirZsN8z',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				emoticon : 'wz27kchVNo4mQTrL',
				color : 54,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(43),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -2926903498133606248,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -3664582310691148134,
			id : 47,
			forwards : 92,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : -7933188130339215887,
			top_msg_id : 49,
			read_max_id : 54,
			broadcast_id : -2569233791875904873,
			broadcast_post : 25,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -7772335765066528658,
			top_msg_id : 62,
			read_max_id : 92,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : -8214352039857813304,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -1823526888076049860,
			top_msg_id : 59,
			from_id : $client->peerUser(
				user_id : 6307976721846111717,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -5125201398903243482,
			),
			messages : array(3),
			pts : 6,
			pts_count : 33,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -2629314915232672090,
			messages : array(33),
			pts : 12,
			pts_count : 84,
		),
		$client->updateChat(
			chat_id : -6623669300091964985,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : -6446749967382059263,
				access_hash : 5816181575863123718,
			),
			participants : array(
				$client->groupCallParticipant(
					muted : true,
					left : true,
					can_self_unmute : true,
					just_joined : true,
					versioned : true,
					min : true,
					muted_by_you : true,
					volume_by_admin : true,
					self : true,
					video_joined : true,
					peer : $client->peerUser(
						user_id : 8822341446561036779,
					),
					date : 74,
					active_date : 59,
					source : 68,
					volume : 99,
					about : 'XG7flbdyzEFaOsWJ',
					raise_hand_rating : 4274400397082877834,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'rAy9kcPwNR2Vz0sx',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 98,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'H3ZGE7KXnT60rWe2',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 79,
					),
					paid_stars_total : -136579847580114767,
				),
			),
			version : 26,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : -4611164500265591354,
			),
			call : $client->groupCallDiscarded(
				id : -4187328267149929267,
				access_hash : 1773026070327320633,
				duration : 98,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : 8432133117798599886,
			),
			ttl_period : 9,
		),
		$client->updateChatParticipant(
			chat_id : 1059871878600985147,
			date : 95,
			actor_id : 4711294225518440200,
			user_id : 3332015372198259694,
			prev_participant : $client->chatParticipant(
				user_id : -2720781003180161319,
				inviter_id : 5553064515428702996,
				date : 36,
				rank : 'KUcLMDnAl6ZkCthq',
			),
			new_participant : $client->chatParticipant(
				user_id : -8932652935419715254,
				inviter_id : 178703695422314130,
				date : 42,
				rank : 'zIFPb7KXDkert4sQ',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'KDTCmdpntWYcx5H0',
				admin_id : -8011481411224888076,
				date : 66,
				start_date : 83,
				expire_date : 82,
				usage_limit : 41,
				usage : 68,
				requested : 55,
				subscription_expired : 3,
				title : 'HI7LPjYfinE1erpR',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 18,
					amount : 5200945302826160569,
				),
			),
			qts : 23,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 1489079142143607249,
			date : 15,
			actor_id : -1434844233198114843,
			user_id : 2356405879482755054,
			prev_participant : $client->channelParticipant(
				user_id : -3288806944989848484,
				date : 44,
				subscription_until_date : 49,
				rank : 'AVUnuXTaswB4Lpzr',
			),
			new_participant : $client->channelParticipant(
				user_id : 4816574148110833490,
				date : 13,
				subscription_until_date : 91,
				rank : 'YcPGNB4rfo1bId9W',
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'h5l2D0OyebSCM7zw',
				admin_id : 8577309805586009731,
				date : 82,
				start_date : 62,
				expire_date : 20,
				usage_limit : 58,
				usage : 97,
				requested : 42,
				subscription_expired : 86,
				title : 'QYk16OctZLF2RSz9',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 9,
					amount : 3107859611196291960,
				),
			),
			qts : 10,
		),
		$client->updateBotStopped(
			user_id : -8083555749620915124,
			date : 13,
			stopped : true,
			qts : 47,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'qn4sCalLcNUT8OPQ',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 8927828934495550568,
			),
			bot_id : 8206176485492701329,
			commands : array(
				$client->botCommand(
					command : 'vlNtn2e8d5wxuBY4',
					description : 'mPSpCK1i4syzIqg0',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : -6579733553479664767,
			),
			requests_pending : 52,
			recent_requesters : array(2720474017060292447),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : -723490274242573437,
			),
			date : 0,
			user_id : -4377132032375813023,
			about : '51FKYInlOMGarbQS',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'dwvnE4me9CjFXfH3',
				admin_id : 8332204962720913623,
				date : 6,
				start_date : 24,
				expire_date : 20,
				usage_limit : 61,
				usage : 38,
				requested : 93,
				subscription_expired : 59,
				title : '4yIVugk2KjECFeoz',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 27,
					amount : -4195863450824307500,
				),
			),
			qts : 16,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : -8248995501229851092,
			),
			msg_id : 79,
			top_msg_id : 54,
			saved_peer_id : $client->peerUser(
				user_id : 738882642363569489,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 50,
						reaction : $client->reactionEmpty(...),
						count : 88,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 87,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 56,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : 8131686804955613119,
		),
		$client->updateBotMenuButton(
			bot_id : 8208074213435589424,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : 9014435250203024042,
			),
			msg_id : 28,
			transcription_id : 5723084250077928877,
			text : 'puTiy8JGNqxwRDSc',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : -1411336428455626910,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -6620290701747586919,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 5888934227454839059,
			),
			msg_id : 85,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 66,
					h : 63,
					thumb : $client->photoSizeEmpty(
						type : 'hTsnkF0GjPaNeMyb',
					),
					video_duration : 22,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -8806000475613659470,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 4528403288080244566,
			),
			story : $client->storyItemDeleted(
				id : 87,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -1334462165466239720,
			),
			max_id : 60,
		),
		$client->updateStoryID(
			id : 10,
			random_id : -3312652912510113138,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 9,
				cooldown_until_date : 51,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -8956151148457712122,
			),
			story_id : 38,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -4093977114758568460,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'ykeH0LszlT6VjMEP',
				user_id : -4038638367387803101,
				giveaway_msg_id : 61,
				date : 57,
				expires : 0,
				used_gift_slug : 'XQFbnLVrRWpDfcHM',
				multiplier : 57,
				stars : 2168817592365700104,
			),
			qts : 36,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -8673224770639166303,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 2759501480981739561,
			),
			wallpaper : $client->wallPaper(
				id : -9085784562594821630,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 8580781493653292420,
				slug : 'wMqm1ucNJV2TYDpK',
				document : $client->documentEmpty(
					id : 6816594211298619481,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 86,
					second_background_color : 7,
					third_background_color : 77,
					fourth_background_color : 42,
					intensity : 85,
					rotation : 92,
					emoticon : 'BJpech7WGCAl2qrd',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : -5364495314395184749,
			),
			msg_id : 53,
			date : 28,
			actor : $client->peerUser(
				user_id : 5580879904112426552,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'LdD0eviEF8QSxUrc',
				),
				$client->reactionCustomEmoji(
					document_id : -1203208362784543866,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'bu17qcEoAUVS2CZM',
				),
				$client->reactionCustomEmoji(
					document_id : -6183015664700545724,
				),
				$client->reactionPaid(),
			),
			qts : 73,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : 3329612779734474291,
			),
			msg_id : 72,
			date : 49,
			reactions : array(
				$client->reactionCount(
					chosen_order : 81,
					reaction : $client->reactionEmpty(),
					count : 30,
				),
			),
			qts : 72,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -7473682163808222481,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : 1496945661903579441,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 32,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'PsEple19fFru4vkL',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 24,
					shortcut : 'kTIFSRp9mUtXGKxj',
					top_message : 89,
					count : 50,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 86,
				shortcut : '3nF9wqRW2deaYvGD',
				top_message : 61,
				count : 61,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 51,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 36,
				peer_id : $client->peerUser(
					user_id : 5780926142276579799,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 19,
			messages : array(96),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'X6R53YhulBvw7IFH',
				user_id : -4163014847303628167,
				dc_id : 28,
				date : 97,
				rights : $client->businessBotRights(
					reply : true,
					read_messages : true,
					delete_sent_messages : true,
					delete_received_messages : true,
					edit_name : true,
					edit_bio : true,
					edit_profile_photo : true,
					edit_username : true,
					view_gifts : true,
					sell_gifts : true,
					change_gift_settings : true,
					transfer_and_upgrade_gifts : true,
					transfer_stars : true,
					manage_stories : true,
				),
			),
			qts : 81,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : '0rtBwIdpNORKn2L4',
			message : $client->messageEmpty(
				id : 46,
				peer_id : $client->peerUser(
					user_id : 2880730193711121600,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 86,
				peer_id : $client->peerUser(
					user_id : -250937456657963271,
				),
			),
			qts : 28,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'zNAK0eBSQZqxWuM2',
			message : $client->messageEmpty(
				id : 87,
				peer_id : $client->peerUser(
					user_id : 6628590667314272055,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 98,
				peer_id : $client->peerUser(
					user_id : -6420906891989365554,
				),
			),
			qts : 38,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'PaAlJmiMwIvo9G68',
			peer : $client->peerUser(
				user_id : -9098499156868620058,
			),
			messages : array(18),
			qts : 87,
		),
		$client->updateNewStoryReaction(
			story_id : 70,
			peer : $client->peerUser(
				user_id : 1811056741196116753,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 1841312445540150145,
				nanos : 22,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : 1104206294702745268,
			user_id : 5921566822635722065,
			connection_id : 'XDmNQRfa1vrYnFGi',
			message : $client->messageEmpty(
				id : 84,
				peer_id : $client->peerUser(
					user_id : -529090233625652476,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 2,
				peer_id : $client->peerUser(
					user_id : -8929447267804778514,
				),
			),
			chat_instance : -568390783522073470,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -2686749770263558479,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 853379066369638484,
					nanos : 41,
				),
				available_balance : $client->starsAmount(
					amount : 9066174575573873376,
					nanos : 98,
				),
				overall_revenue : $client->starsAmount(
					amount : 1226130046561428499,
					nanos : 98,
				),
				next_withdrawal_at : 48,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -7482469918436001540,
			payload : 'AMjz8YgE9yOp6xSR',
			qts : 76,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 60,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 73,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -2250009693684952978,
				access_hash : -3694467273949005949,
			),
			sub_chain_id : 0,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 37,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 5888875144344618365,
			saved_peer_id : $client->peerUser(
				user_id : -5568453593568991643,
			),
			read_max_id : 97,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -5691765453549498463,
			saved_peer_id : $client->peerUser(
				user_id : 1142274697926005946,
			),
			read_max_id : 29,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 6515216379532283225,
			saved_peer_id : $client->peerUser(
				user_id : 8518541401837849411,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : 5203890424885874492,
				access_hash : 2625162949493752057,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 64,
				from_id : $client->peerUser(
					user_id : -6071972350673716016,
				),
				date : 56,
				message : $client->textWithEntities(
					text : 'q8TVNj4YtW59MK6P',
					entities : array(
						$client->messageEntityUnknown(...),
						$client->messageEntityMention(...),
						$client->messageEntityHashtag(...),
						$client->messageEntityBotCommand(...),
						$client->messageEntityUrl(...),
						$client->messageEntityEmail(...),
						$client->messageEntityBold(...),
						$client->messageEntityItalic(...),
						$client->messageEntityCode(...),
						$client->messageEntityPre(...),
						$client->messageEntityTextUrl(...),
						$client->messageEntityMentionName(...),
						$client->inputMessageEntityMentionName(...),
						$client->messageEntityPhone(...),
						$client->messageEntityCashtag(...),
						$client->messageEntityUnderline(...),
						$client->messageEntityStrike(...),
						$client->messageEntityBankCard(...),
						$client->messageEntitySpoiler(...),
						$client->messageEntityCustomEmoji(...),
						$client->messageEntityBlockquote(...),
						$client->messageEntityFormattedDate(...),
						$client->messageEntityDiffInsert(...),
						$client->messageEntityDiffReplace(...),
						$client->messageEntityDiffDelete(...),
					),
				),
				paid_message_stars : 5197610241819044529,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : 7122034476860800806,
				access_hash : 8545922109624228014,
			),
			from_id : $client->peerUser(
				user_id : -9065271342781440844,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : -7268901470731211611,
			),
			topic_id : 46,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -4127961770191614829,
			),
			order : array(93),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 5907377745112610907,
				access_hash : 3050076791069302026,
			),
			messages : array(67),
		),
		$client->updateStarGiftAuctionState(
			gift_id : -6155796912805091734,
			state : $client->starGiftAuctionStateNotModified(),
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -9076706468557068849,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : 7375053285049790140,
				bid_date : 26,
				min_bid_amount : 1261591279868948577,
				bid_peer : $client->peerUser(
					user_id : 5769372668914346584,
				),
				acquired_count : 0,
			),
		),
		$client->updateEmojiGameInfo(
			info : $client->messages->emojiGameUnavailable(),
		),
		$client->updateStarGiftCraftFail(),
		$client->updateChatParticipantRank(
			chat_id : 8045363296938368017,
			user_id : 4496310027290405417,
			rank : 'XZxtijJ1hVoMEQ6k',
			version : 89,
		),
		$client->updateManagedBot(
			user_id : 8779330088128873492,
			bot_id : -667917586613916255,
			qts : 44,
		),
		$client->updateBotGuestChatQuery(
			query_id : -8158786559690864710,
			message : $client->messageEmpty(
				id : 63,
				peer_id : $client->peerUser(
					user_id : 8674543354232078981,
				),
			),
			reference_messages : array(
				$client->messageEmpty(
					id : 89,
					peer_id : $client->peerUser(
						user_id : 2699384908585696648,
					),
				),
				$client->message(
					out : true,
					mentioned : true,
					media_unread : true,
					silent : true,
					post : true,
					from_scheduled : true,
					legacy : true,
					edit_hide : true,
					pinned : true,
					noforwards : true,
					invert_media : true,
					offline : true,
					video_processing_pending : true,
					paid_suggested_post_stars : true,
					paid_suggested_post_ton : true,
					id : 49,
					from_id : $client->peerUser(
						user_id : -5821012277584892718,
					),
					from_boosts_applied : 62,
					from_rank : 'zRpJWO6qvfVLsXES',
					peer_id : $client->peerUser(
						user_id : -652051720619962641,
					),
					saved_peer_id : $client->peerUser(
						user_id : -9112094919800959528,
					),
					fwd_from : $client->messageFwdHeader(
						imported : true,
						saved_out : true,
						from_id : $client->peerUser(...),
						from_name : 'RK3e746vmdDibWcx',
						date : 59,
						channel_post : 69,
						post_author : 'JmC081RqQlA9MOIg',
						saved_from_peer : $client->peerUser(...),
						saved_from_msg_id : 22,
						saved_from_id : $client->peerUser(...),
						saved_from_name : 'EnHZToR56tQLJWjM',
						saved_date : 44,
						psa_type : 'A9Z5bkLlJYhPv8I4',
					),
					via_bot_id : -3356000956477020299,
					via_business_bot_id : 1383693916557720223,
					guestchat_via_from : $client->peerUser(
						user_id : 538791614640746425,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_msg_id : 49,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 50,
						quote_text : 'KYxLfACW0XSaoEge',
						quote_entities : array(
							$client->messageEntityUnknown(...),
							$client->messageEntityMention(...),
							$client->messageEntityHashtag(...),
							$client->messageEntityBotCommand(...),
							$client->messageEntityUrl(...),
							$client->messageEntityEmail(...),
							$client->messageEntityBold(...),
							$client->messageEntityItalic(...),
							$client->messageEntityCode(...),
							$client->messageEntityPre(...),
							$client->messageEntityTextUrl(...),
							$client->messageEntityMentionName(...),
							$client->inputMessageEntityMentionName(...),
							$client->messageEntityPhone(...),
							$client->messageEntityCashtag(...),
							$client->messageEntityUnderline(...),
							$client->messageEntityStrike(...),
							$client->messageEntityBankCard(...),
							$client->messageEntitySpoiler(...),
							$client->messageEntityCustomEmoji(...),
							$client->messageEntityBlockquote(...),
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 53,
						todo_item_id : 14,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 69,
					message : 'zelW6gu8QVoqDPCj',
					media : $client->messageMediaEmpty(),
					reply_markup : $client->replyKeyboardHide(
						selective : true,
					),
					entities : array(
						$client->messageEntityUnknown(
							offset : 0,
							length : 22,
						),
						$client->messageEntityMention(
							offset : 0,
							length : 62,
						),
						$client->messageEntityHashtag(
							offset : 0,
							length : 71,
						),
						$client->messageEntityBotCommand(
							offset : 0,
							length : 54,
						),
						$client->messageEntityUrl(
							offset : 0,
							length : 34,
						),
						$client->messageEntityEmail(
							offset : 0,
							length : 52,
						),
						$client->messageEntityBold(
							offset : 0,
							length : 28,
						),
						$client->messageEntityItalic(
							offset : 0,
							length : 58,
						),
						$client->messageEntityCode(
							offset : 0,
							length : 9,
						),
						$client->messageEntityPre(
							offset : 0,
							length : 46,
							language : 'ZhvorVY4NktIqTlJ',
						),
						$client->messageEntityTextUrl(
							offset : 0,
							length : 51,
							url : 'https://docs.liveproto.dev',
						),
						$client->messageEntityMentionName(
							offset : 0,
							length : 25,
							user_id : -2469446718714747217,
						),
						$client->inputMessageEntityMentionName(
							offset : 0,
							length : 66,
							user_id : $client->get_input_user(user : '@TakNone'),
						),
						$client->messageEntityPhone(
							offset : 0,
							length : 2,
						),
						$client->messageEntityCashtag(
							offset : 0,
							length : 67,
						),
						$client->messageEntityUnderline(
							offset : 0,
							length : 33,
						),
						$client->messageEntityStrike(
							offset : 0,
							length : 39,
						),
						$client->messageEntityBankCard(
							offset : 0,
							length : 4,
						),
						$client->messageEntitySpoiler(
							offset : 0,
							length : 69,
						),
						$client->messageEntityCustomEmoji(
							offset : 0,
							length : 95,
							document_id : -7160127328539486565,
						),
						$client->messageEntityBlockquote(
							collapsed : true,
							offset : 0,
							length : 31,
						),
						$client->messageEntityFormattedDate(
							relative : true,
							short_time : true,
							long_time : true,
							short_date : true,
							long_date : true,
							day_of_week : true,
							offset : 0,
							length : 84,
							date : 65,
						),
						$client->messageEntityDiffInsert(
							offset : 0,
							length : 5,
						),
						$client->messageEntityDiffReplace(
							offset : 0,
							length : 25,
							old_text : 'Ze7gSNyHbK3GYFxk',
						),
						$client->messageEntityDiffDelete(
							offset : 0,
							length : 74,
						),
					),
					views : 35,
					forwards : 10,
					replies : $client->messageReplies(
						comments : true,
						replies : 51,
						replies_pts : 50,
						recent_repliers : array(
							$client->peerUser(...),
							$client->peerChat(...),
							$client->peerChannel(...),
						),
						channel_id : -7099029400666763630,
						max_id : 38,
						read_max_id : 3,
					),
					edit_date : 44,
					post_author : 'bxwE561lRqHTY3Ku',
					grouped_id : 8630168605023988208,
					reactions : $client->messageReactions(
						min : true,
						can_see_list : true,
						reactions_as_tags : true,
						results : array(
							$client->reactionCount(...),
						),
						recent_reactions : array(
							$client->messagePeerReaction(...),
						),
						top_reactors : array(
							$client->messageReactor(...),
						),
					),
					restriction_reason : array(
						$client->restrictionReason(
							platform : 'rZGOgmhXpYH5EqcR',
							reason : '95S67FQKYxevdXMJ',
							text : 'SK5wc1oMuAY0L6Ih',
						),
					),
					ttl_period : 57,
					quick_reply_shortcut_id : 100,
					effect : 5842358400450078162,
					factcheck : $client->factCheck(
						need_check : true,
						country : 'YZkNlJDr6LwFdvQ0',
						text : $client->textWithEntities(...),
						hash : 0,
					),
					report_delivery_until_date : 78,
					paid_message_stars : -6611574555660284423,
					suggested_post : $client->suggestedPost(
						accepted : true,
						rejected : true,
						price : $client->starsAmount(...),
						schedule_date : 35,
					),
					schedule_repeat_period : 17,
					summary_from_language : 'n026IxWgPT8lkuqs',
				),
				$client->messageService(
					out : true,
					mentioned : true,
					media_unread : true,
					reactions_are_possible : true,
					silent : true,
					post : true,
					legacy : true,
					id : 21,
					from_id : $client->peerUser(
						user_id : -441905854712576299,
					),
					peer_id : $client->peerUser(
						user_id : -5989509005857637534,
					),
					saved_peer_id : $client->peerUser(
						user_id : 7853088368265476683,
					),
					reply_to : $client->messageReplyHeader(
						reply_to_scheduled : true,
						forum_topic : true,
						quote : true,
						reply_to_msg_id : 66,
						reply_to_peer_id : $client->peerUser(...),
						reply_from : $client->messageFwdHeader(...),
						reply_media : $client->messageMediaEmpty(...),
						reply_to_top_id : 90,
						quote_text : 'SMvpFX8nsjbu97yH',
						quote_entities : array(
							$client->messageEntityUnknown(...),
							$client->messageEntityMention(...),
							$client->messageEntityHashtag(...),
							$client->messageEntityBotCommand(...),
							$client->messageEntityUrl(...),
							$client->messageEntityEmail(...),
							$client->messageEntityBold(...),
							$client->messageEntityItalic(...),
							$client->messageEntityCode(...),
							$client->messageEntityPre(...),
							$client->messageEntityTextUrl(...),
							$client->messageEntityMentionName(...),
							$client->inputMessageEntityMentionName(...),
							$client->messageEntityPhone(...),
							$client->messageEntityCashtag(...),
							$client->messageEntityUnderline(...),
							$client->messageEntityStrike(...),
							$client->messageEntityBankCard(...),
							$client->messageEntitySpoiler(...),
							$client->messageEntityCustomEmoji(...),
							$client->messageEntityBlockquote(...),
							$client->messageEntityFormattedDate(...),
							$client->messageEntityDiffInsert(...),
							$client->messageEntityDiffReplace(...),
							$client->messageEntityDiffDelete(...),
						),
						quote_offset : 100,
						todo_item_id : 89,
						poll_option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
					date : 33,
					action : $client->messageActionEmpty(),
					reactions : $client->messageReactions(
						min : true,
						can_see_list : true,
						reactions_as_tags : true,
						results : array(
							$client->reactionCount(...),
						),
						recent_reactions : array(
							$client->messagePeerReaction(...),
						),
						top_reactors : array(
							$client->messageReactor(...),
						),
					),
					ttl_period : 60,
				),
			),
			qts : 26,
		),
		$client->updateAiComposeTones(),
	),
	chats : array(
		$client->chatEmpty(
			id : -4853439612871461993,
		),
		$client->chat(
			creator : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : -8564548721827537471,
			title : 'CfQkzRoX5qWI7Glr',
			photo : $client->chatPhotoEmpty(),
			participants_count : 78,
			date : 34,
			version : 54,
			migrated_to : $client->get_input_channel(channel : '@LiveProto'),
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 83,
			),
		),
		$client->chatForbidden(
			id : 885731025644376090,
			title : '2O9DyJagbuwxEpVm',
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
			id : 1909922407567432603,
			access_hash : -3328467991277978412,
			title : 'hQz5N9RJtAmZHL3U',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 19,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'cIT3KVGQsEztaoAg',
					reason : 'tbaXipoRzOKmhQeM',
					text : 'xe2XcmJsyuqvQkhB',
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
				manage_ranks : true,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 23,
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
				edit_rank : true,
				send_reactions : true,
				until_date : 97,
			),
			participants_count : 18,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 9,
			),
			color : $client->peerColor(
				color : 56,
				background_emoji_id : 972733142336990642,
			),
			profile_color : $client->peerColor(
				color : 27,
				background_emoji_id : -4836362150813183643,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 41,
			subscription_until_date : 11,
			bot_verification_icon : -8022615807068679600,
			send_paid_messages_stars : -271541352983702959,
			linked_monoforum_id : -5446583876296553484,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			monoforum : true,
			id : -4463493108754539435,
			access_hash : -2091781738993649623,
			title : 'vQCRej6yIwzu48Yb',
			until_date : 45,
		),
	),
	users : array(
		$client->userEmpty(
			id : -2717088830601090894,
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
			bot_forum_can_manage_topics : true,
			bot_can_manage_bots : true,
			bot_guestchat : true,
			id : -3681709359510008031,
			access_hash : 590784926705525988,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 49,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Ngdp9xtIYfeiXvaT',
					reason : 'a54QlMhVJeKiFkWo',
					text : 'eDbZvf4BklYUd073',
				),
			),
			bot_inline_placeholder : 'BcCsmoHFV8DqIbJh',
			lang_code : 'Tirnbvu5I2q31Yko',
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
				max_id : 81,
			),
			color : $client->peerColor(
				color : 96,
				background_emoji_id : 1059704035673735686,
			),
			profile_color : $client->peerColor(
				color : 39,
				background_emoji_id : 6552749267170089794,
			),
			bot_active_users : 4,
			bot_verification_icon : 7065406961770444954,
			send_paid_messages_stars : -7239423366547282025,
		),
	),
);
```