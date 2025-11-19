# updates

**Description** : *Full constructor of updates*

**Layer** : 218

```tl
updates#74ae4240 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>updates</mark> | [`Vector<Update>`](type/Update) | List of updates |
| <mark>users</mark> | [`Vector<User>`](type/User) | List of users mentioned in updates |
| <mark>chats</mark> | [`Vector<Chat>`](type/Chat) | List of chats mentioned in updates |
| <mark>date</mark> | [`int`](type/int) | Current date |
| <mark>seq</mark> | [`int`](type/int) | Total number of sent updates |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updates(
	updates : array(
		$client->updateNewMessage(
			message : $client->messageEmpty(
				id : 15,
				peer_id : $client->peerUser(
					user_id : -4794576619011596338,
				),
			),
			pts : 52,
			pts_count : 93,
		),
		$client->updateMessageID(
			id : 12,
			random_id : 5214958017653045040,
		),
		$client->updateDeleteMessages(
			messages : array(49),
			pts : 30,
			pts_count : 15,
		),
		$client->updateUserTyping(
			user_id : 8066046516235722572,
			top_msg_id : 15,
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatUserTyping(
			chat_id : -3684618823330393372,
			from_id : $client->peerUser(
				user_id : -4391561956739023881,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updateChatParticipants(
			participants : $client->chatParticipantsForbidden(
				chat_id : -3322399210070965658,
				self_participant : $client->chatParticipant(
					user_id : 3761433132595083928,
					inviter_id : 1515498002702213306,
					date : 97,
				),
			),
		),
		$client->updateUserStatus(
			user_id : 7504485797217166318,
			status : $client->userStatusEmpty(),
		),
		$client->updateUserName(
			user_id : -3092692901403705082,
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
			date : 15,
			device : 'sIjhyS5XfVxcuW0P',
			location : 'ZTSivq3wfPGFakQj',
		),
		$client->updateNewEncryptedMessage(
			message : $client->encryptedMessage(
				random_id : -8635648252019796057,
				chat_id : 34,
				date : 21,
				bytes : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				file : $client->encryptedFileEmpty(),
			),
			qts : 59,
		),
		$client->updateEncryptedChatTyping(
			chat_id : 90,
		),
		$client->updateEncryption(
			chat : $client->encryptedChatEmpty(
				id : 94,
			),
			date : 48,
		),
		$client->updateEncryptedMessagesRead(
			chat_id : 30,
			max_date : 82,
			date : 27,
		),
		$client->updateChatParticipantAdd(
			chat_id : -7465686948670786711,
			user_id : 5712772624161832265,
			inviter_id : -8343884994452989101,
			date : 44,
			version : 17,
		),
		$client->updateChatParticipantDelete(
			chat_id : 3292964276743912939,
			user_id : -3679734103379353119,
			version : 73,
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
					id : 3,
					ip_address : '127.0.0.1',
					port : 9,
					secret : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
				),
			),
		),
		$client->updateNotifySettings(
			peer : $client->notifyPeer(
				peer : $client->peerUser(
					user_id : 8232373006164692183,
				),
			),
			notify_settings : $client->peerNotifySettings(
				show_previews : false,
				silent : true,
				mute_until : 42,
				ios_sound : $client->notificationSoundDefault(),
				android_sound : $client->notificationSoundDefault(),
				other_sound : $client->notificationSoundDefault(),
				stories_muted : true,
				stories_hide_sender : false,
				stories_ios_sound : $client->notificationSoundDefault(),
				stories_android_sound : $client->notificationSoundDefault(),
				stories_other_sound : $client->notificationSoundDefault(),
			),
		),
		$client->updateServiceNotification(
			popup : true,
			invert_media : true,
			inbox_date : 72,
			type : 'ciaKQNsP57tEeYD2',
			message : '6biVkgnfE8O57GA3',
			media : $client->messageMediaEmpty(),
			entities : array(
				$client->messageEntityUnknown(
					offset : 0,
					length : 99,
				),
				$client->messageEntityMention(
					offset : 0,
					length : 26,
				),
				$client->messageEntityHashtag(
					offset : 0,
					length : 68,
				),
				$client->messageEntityBotCommand(
					offset : 0,
					length : 51,
				),
				$client->messageEntityUrl(
					offset : 0,
					length : 17,
				),
				$client->messageEntityEmail(
					offset : 0,
					length : 64,
				),
				$client->messageEntityBold(
					offset : 0,
					length : 95,
				),
				$client->messageEntityItalic(
					offset : 0,
					length : 37,
				),
				$client->messageEntityCode(
					offset : 0,
					length : 93,
				),
				$client->messageEntityPre(
					offset : 0,
					length : 95,
					language : 'TDEogmY61huziG9r',
				),
				$client->messageEntityTextUrl(
					offset : 0,
					length : 16,
					url : 'https://docs.liveproto.dev',
				),
				$client->messageEntityMentionName(
					offset : 0,
					length : 40,
					user_id : -8600858296058720378,
				),
				$client->inputMessageEntityMentionName(
					offset : 0,
					length : 39,
					user_id : $client->get_input_user(user : '@TakNone'),
				),
				$client->messageEntityPhone(
					offset : 0,
					length : 73,
				),
				$client->messageEntityCashtag(
					offset : 0,
					length : 70,
				),
				$client->messageEntityUnderline(
					offset : 0,
					length : 92,
				),
				$client->messageEntityStrike(
					offset : 0,
					length : 49,
				),
				$client->messageEntityBankCard(
					offset : 0,
					length : 31,
				),
				$client->messageEntitySpoiler(
					offset : 0,
					length : 13,
				),
				$client->messageEntityCustomEmoji(
					offset : 0,
					length : 73,
					document_id : -3569954522818588379,
				),
				$client->messageEntityBlockquote(
					collapsed : true,
					offset : 0,
					length : 18,
				),
			),
		),
		$client->updatePrivacy(
			key : $client->privacyKeyStatusTimestamp(),
			rules : array(
				$client->privacyValueAllowContacts(),
				$client->privacyValueAllowAll(),
				$client->privacyValueAllowUsers(
					users : array(7246386534239719289),
				),
				$client->privacyValueDisallowContacts(),
				$client->privacyValueDisallowAll(),
				$client->privacyValueDisallowUsers(
					users : array(5888884858072820223),
				),
				$client->privacyValueAllowChatParticipants(
					chats : array(8434336108136805510),
				),
				$client->privacyValueDisallowChatParticipants(
					chats : array(-8536566964388274258),
				),
				$client->privacyValueAllowCloseFriends(),
				$client->privacyValueAllowPremium(),
				$client->privacyValueAllowBots(),
				$client->privacyValueDisallowBots(),
			),
		),
		$client->updateUserPhone(
			user_id : -981743131180020755,
			phone : '+1234567890',
		),
		$client->updateReadHistoryInbox(
			folder_id : 24,
			peer : $client->peerUser(
				user_id : -5671870675208190296,
			),
			top_msg_id : 31,
			max_id : 54,
			still_unread_count : 97,
			pts : 21,
			pts_count : 24,
		),
		$client->updateReadHistoryOutbox(
			peer : $client->peerUser(
				user_id : 2819703071245460700,
			),
			max_id : 64,
			pts : 83,
			pts_count : 65,
		),
		$client->updateWebPage(
			webpage : $client->webPageEmpty(
				id : -5896298896622131268,
				url : 'https://docs.liveproto.dev',
			),
			pts : 16,
			pts_count : 54,
		),
		$client->updateReadMessagesContents(
			messages : array(71),
			pts : 9,
			pts_count : 26,
			date : 90,
		),
		$client->updateChannelTooLong(
			channel_id : 337529353021977597,
			pts : 9,
		),
		$client->updateChannel(
			channel_id : -3921431953468942843,
		),
		$client->updateNewChannelMessage(
			message : $client->messageEmpty(
				id : 25,
				peer_id : $client->peerUser(
					user_id : -8023675480153319999,
				),
			),
			pts : 31,
			pts_count : 41,
		),
		$client->updateReadChannelInbox(
			folder_id : 83,
			channel_id : -5003311785131830683,
			max_id : 7,
			still_unread_count : 25,
			pts : 95,
		),
		$client->updateDeleteChannelMessages(
			channel_id : -2467409216278733871,
			messages : array(76),
			pts : 22,
			pts_count : 34,
		),
		$client->updateChannelMessageViews(
			channel_id : 4097768530412205823,
			id : 8,
			views : 68,
		),
		$client->updateChatParticipantAdmin(
			chat_id : 8300667817523351046,
			user_id : 6541397683849954729,
			is_admin : true,
			version : 27,
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
					installed_date : 35,
					id : 5441377842235759039,
					access_hash : 132093253166826104,
					title : '0etD9MESvyrBmsuR',
					short_name : 'HLoVFpaiZ9IdjAwu',
					thumbs : array(
						$client->photoSizeEmpty(...),
						$client->photoSize(...),
						$client->photoCachedSize(...),
						$client->photoStrippedSize(...),
						$client->photoSizeProgressive(...),
						$client->photoPathSize(...),
					),
					thumb_dc_id : 73,
					thumb_version : 99,
					thumb_document_id : -6061675873130081049,
					count : 53,
					hash : 0,
				),
				packs : array(
					$client->stickerPack(
						emoticon : '9ovTEdOAVrnKqcx7',
						documents : array(-3537283827848175948),
					),
				),
				keywords : array(
					$client->stickerKeyword(
						document_id : -1891440629136475618,
						keyword : array('3OWUhwpYIRr8CqES'),
					),
				),
				documents : array(
					$client->documentEmpty(
						id : -1107804112309465939,
					),
					$client->document(
						id : 7878690644958328459,
						access_hash : 9152174430335915150,
						file_reference : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						date : 69,
						mime_type : 'bSyXo18clRWphFKk',
						size : 2669572088408650108,
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
			order : array(2098435875513937962),
		),
		$client->updateStickerSets(
			masks : true,
			emojis : true,
		),
		$client->updateSavedGifs(),
		$client->updateBotInlineQuery(
			query_id : 1054172334209387825,
			user_id : -8459091839304880563,
			query : 'pSdD2K3MJ8QBtoEc',
			geo : $client->geoPointEmpty(),
			peer_type : $client->inlineQueryPeerTypeSameBotPM(),
			offset : 'tBfTwWJAk07O8Y2h',
		),
		$client->updateBotInlineSend(
			user_id : -1279506734357255397,
			query : 'P3Hh6Q2uv1yR0oeY',
			geo : $client->geoPointEmpty(),
			id : 'KlJOSkEztvoACn5q',
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 50,
				id : 3387147764337571437,
				access_hash : 7114703969273769018,
			),
		),
		$client->updateEditChannelMessage(
			message : $client->messageEmpty(
				id : 49,
				peer_id : $client->peerUser(
					user_id : -6680617022512411263,
				),
			),
			pts : 85,
			pts_count : 70,
		),
		$client->updateBotCallbackQuery(
			query_id : -4017395976378461712,
			user_id : 6941930353030091011,
			peer : $client->peerUser(
				user_id : -5708329168015122128,
			),
			msg_id : 76,
			chat_instance : -9218762015460271989,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'DWgkRs2U7fphJ0KO',
		),
		$client->updateEditMessage(
			message : $client->messageEmpty(
				id : 94,
				peer_id : $client->peerUser(
					user_id : -8703993411974546863,
				),
			),
			pts : 91,
			pts_count : 66,
		),
		$client->updateInlineBotCallbackQuery(
			query_id : 6784545215351412057,
			user_id : 8591144336135803176,
			msg_id : $client->inputBotInlineMessageID(
				dc_id : 84,
				id : 7438753237210582665,
				access_hash : 2545017222737889527,
			),
			chat_instance : 3390585580241584729,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			game_short_name : 'VoJcSPQKTyM8sz2I',
		),
		$client->updateReadChannelOutbox(
			channel_id : 2401522395536803351,
			max_id : 24,
		),
		$client->updateDraftMessage(
			peer : $client->peerUser(
				user_id : -1274829463917068516,
			),
			top_msg_id : 39,
			saved_peer_id : $client->peerUser(
				user_id : 1376388431756792108,
			),
			draft : $client->draftMessageEmpty(
				date : 48,
			),
		),
		$client->updateReadFeaturedStickers(),
		$client->updateRecentStickers(),
		$client->updateConfig(),
		$client->updatePtsChanged(),
		$client->updateChannelWebPage(
			channel_id : -3100073771850318839,
			webpage : $client->webPageEmpty(
				id : 4110162330784669406,
				url : 'https://docs.liveproto.dev',
			),
			pts : 77,
			pts_count : 25,
		),
		$client->updateDialogPinned(
			pinned : true,
			folder_id : 42,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 920299246126569840,
				),
			),
		),
		$client->updatePinnedDialogs(
			folder_id : 14,
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -2545189919029260207,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 46,
				),
			),
		),
		$client->updateBotWebhookJSON(
			data : $client->dataJSON(
				data : 'saOxduo8znKw61AC',
			),
		),
		$client->updateBotWebhookJSONQuery(
			query_id : -2721365250375908286,
			data : $client->dataJSON(
				data : 'ClIVgWUaK6Hqusm8',
			),
			timeout : 73,
		),
		$client->updateBotShippingQuery(
			query_id : 1622783842419426133,
			user_id : 4233796462565090301,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			shipping_address : $client->postAddress(
				street_line1 : 'o0vYFROBdfD4jKAp',
				street_line2 : 'TXoW6nb1jDaOwcgt',
				city : 'esLMKZN4q8FuAItB',
				state : 'dInbZHTpyVsQuCw5',
				country_iso2 : 'nzAr2L4VSwEmJX1O',
				post_code : 'C9fATLNj5mDsyF2S',
			),
		),
		$client->updateBotPrecheckoutQuery(
			query_id : -3349033489309641274,
			user_id : 5622862286670770021,
			payload : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
			info : $client->paymentRequestedInfo(
				name : 'dQE5en9FtVLqzRNY',
				phone : '+1234567890',
				email : 'reply@liveproto.dev',
				shipping_address : $client->postAddress(
					street_line1 : 'TlHMo7suyYjVXf5G',
					street_line2 : 'xHD0Fp8gtCYAczX2',
					city : 'FvKUaR5w4CHuQTIs',
					state : 'GncxgtST97OkbBj3',
					country_iso2 : '6m5aeYSGi2XOoMlt',
					post_code : '6qQsL8huYH5DZdXf',
				),
			),
			shipping_option_id : 'CF0uZDnzeQ5qakWE',
			currency : 'Vex1Kr97d8qTNhDf',
			total_amount : -2889986722688912425,
		),
		$client->updatePhoneCall(
			phone_call : $client->phoneCallEmpty(
				id : 2034101527026683048,
			),
		),
		$client->updateLangPackTooLong(
			lang_code : '1qmuTGjtS86VPRfc',
		),
		$client->updateLangPack(
			difference : $client->langPackDifference(
				lang_code : 'n17CW64NhGwtl8am',
				from_version : 26,
				version : 25,
				strings : array(
					$client->langPackString(
						key : 'oXDN2TyvR8AcJSLl',
						value : '0u8Qefq2KX6B3Eg5',
					),
					$client->langPackStringPluralized(
						key : '8QiHsJDk6fFPpyC3',
						zero_value : 'hu49bLR8FciD5kOo',
						one_value : '6Huths34LGVoXqMl',
						two_value : 'upLi4f6klWO8s2SH',
						few_value : 'Ro9S57nmxOE4vIcd',
						many_value : 'IPLdfx5p4qeNyUCn',
						other_value : 'EY8menRVXc0yZ4aC',
					),
					$client->langPackStringDeleted(
						key : 'Jp7Yewk6KdVZ0RzB',
					),
				),
			),
		),
		$client->updateFavedStickers(),
		$client->updateChannelReadMessagesContents(
			channel_id : -7380620845408817066,
			top_msg_id : 83,
			saved_peer_id : $client->peerUser(
				user_id : 7705122704369988154,
			),
			messages : array(81),
		),
		$client->updateContactsReset(),
		$client->updateChannelAvailableMessages(
			channel_id : -5714045059277547994,
			available_min_id : 19,
		),
		$client->updateDialogUnreadMark(
			unread : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : 6838030028444712463,
				),
			),
			saved_peer_id : $client->peerUser(
				user_id : 989377243187308482,
			),
		),
		$client->updateMessagePoll(
			poll_id : 1198578170213983161,
			poll : $client->poll(
				id : -7791295189381211721,
				closed : true,
				public_voters : true,
				multiple_choice : true,
				quiz : true,
				question : $client->textWithEntities(
					text : 'FGrsXwjJzxQLWa5o',
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
					),
				),
				answers : array(
					$client->pollAnswer(
						text : $client->textWithEntities(...),
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
					),
				),
				close_period : 69,
				close_date : 39,
			),
			results : $client->pollResults(
				min : true,
				results : array(
					$client->pollAnswerVoters(
						chosen : true,
						correct : true,
						option : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
						voters : 95,
					),
				),
				total_voters : 23,
				recent_voters : array(
					$client->peerUser(
						user_id : 8358293311182516989,
					),
					$client->peerChat(
						chat_id : 2307253143210164086,
					),
					$client->peerChannel(
						channel_id : 5104134017320128652,
					),
				),
				solution : 'cKxwPHrh9lANnB4z',
				solution_entities : array(
					$client->messageEntityUnknown(
						offset : 0,
						length : 86,
					),
					$client->messageEntityMention(
						offset : 0,
						length : 14,
					),
					$client->messageEntityHashtag(
						offset : 0,
						length : 6,
					),
					$client->messageEntityBotCommand(
						offset : 0,
						length : 40,
					),
					$client->messageEntityUrl(
						offset : 0,
						length : 61,
					),
					$client->messageEntityEmail(
						offset : 0,
						length : 77,
					),
					$client->messageEntityBold(
						offset : 0,
						length : 63,
					),
					$client->messageEntityItalic(
						offset : 0,
						length : 42,
					),
					$client->messageEntityCode(
						offset : 0,
						length : 70,
					),
					$client->messageEntityPre(
						offset : 0,
						length : 74,
						language : 'MLeigJSswGdBWN6R',
					),
					$client->messageEntityTextUrl(
						offset : 0,
						length : 18,
						url : 'https://docs.liveproto.dev',
					),
					$client->messageEntityMentionName(
						offset : 0,
						length : 25,
						user_id : -8611403960991918239,
					),
					$client->inputMessageEntityMentionName(
						offset : 0,
						length : 84,
						user_id : $client->get_input_user(user : '@TakNone'),
					),
					$client->messageEntityPhone(
						offset : 0,
						length : 100,
					),
					$client->messageEntityCashtag(
						offset : 0,
						length : 75,
					),
					$client->messageEntityUnderline(
						offset : 0,
						length : 45,
					),
					$client->messageEntityStrike(
						offset : 0,
						length : 94,
					),
					$client->messageEntityBankCard(
						offset : 0,
						length : 53,
					),
					$client->messageEntitySpoiler(
						offset : 0,
						length : 65,
					),
					$client->messageEntityCustomEmoji(
						offset : 0,
						length : 75,
						document_id : 7801200664145778853,
					),
					$client->messageEntityBlockquote(
						collapsed : true,
						offset : 0,
						length : 86,
					),
				),
			),
		),
		$client->updateChatDefaultBannedRights(
			peer : $client->peerUser(
				user_id : 5718803326213219402,
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
			version : 15,
		),
		$client->updateFolderPeers(
			folder_peers : array(
				$client->folderPeer(
					peer : $client->peerUser(
						user_id : -6082574189188041479,
					),
					folder_id : 52,
				),
			),
			pts : 20,
			pts_count : 95,
		),
		$client->updatePeerSettings(
			peer : $client->peerUser(
				user_id : -5094974938071124087,
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
				geo_distance : 53,
				request_chat_title : 'YNX43sdI0P2zZEbh',
				request_chat_date : 61,
				business_bot_id : 406158739776365284,
				business_bot_manage_url : 'https://docs.liveproto.dev',
				charge_paid_message_stars : 515865234879728208,
				registration_month : 'WL2eCU0vsBRiZIkq',
				phone_country : '+1234567890',
				name_change_date : 5,
				photo_change_date : 83,
			),
		),
		$client->updatePeerLocated(
			peers : array(
				$client->peerLocated(
					peer : $client->peerUser(
						user_id : 5979822803594370712,
					),
					expires : 36,
					distance : 94,
				),
				$client->peerSelfLocated(
					expires : 51,
				),
			),
		),
		$client->updateNewScheduledMessage(
			message : $client->messageEmpty(
				id : 86,
				peer_id : $client->peerUser(
					user_id : 9138819802827310979,
				),
			),
		),
		$client->updateDeleteScheduledMessages(
			peer : $client->peerUser(
				user_id : -6233116942762909501,
			),
			messages : array(43),
			sent_messages : array(19),
		),
		$client->updateTheme(
			theme : $client->theme(
				creator : true,
				default : true,
				for_chat : true,
				id : 8704701797332925669,
				access_hash : 5960216186217789108,
				slug : 'noE2Bk0sup5fPWFe',
				title : 'OcRFV2TGk1I7mBCY',
				document : $client->documentEmpty(
					id : -4175037164465282811,
				),
				settings : array(
					$client->themeSettings(
						message_colors_animated : true,
						base_theme : $client->baseThemeClassic(...),
						accent_color : 2,
						outbox_accent_color : 100,
						message_colors : array(81),
						wallpaper : $client->wallPaper(...),
					),
				),
				emoticon : 'yQM2Y96O7GZJHrjW',
				installs_count : 39,
			),
		),
		$client->updateGeoLiveViewed(
			peer : $client->peerUser(
				user_id : -3039314771080649813,
			),
			msg_id : 11,
		),
		$client->updateLoginToken(),
		$client->updateMessagePollVote(
			poll_id : -1228190649029489178,
			peer : $client->peerUser(
				user_id : 7304637969461281167,
			),
			options : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			qts : 65,
		),
		$client->updateDialogFilter(
			id : 92,
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
				id : 17,
				title : $client->textWithEntities(
					text : '7krL5sS06O3qVKmp',
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
					),
				),
				emoticon : '6n0L9K2ugmk8SbXG',
				color : 46,
				pinned_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				include_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
				exclude_peers : array($client->get_input_peer(peer : '@LiveProtoChat')),
			),
		),
		$client->updateDialogFilterOrder(
			order : array(13),
		),
		$client->updateDialogFilters(),
		$client->updatePhoneCallSignalingData(
			phone_call_id : -8077852110079048807,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateChannelMessageForwards(
			channel_id : -4035241133711261984,
			id : 84,
			forwards : 73,
		),
		$client->updateReadChannelDiscussionInbox(
			channel_id : 1131266151336024599,
			top_msg_id : 74,
			read_max_id : 52,
			broadcast_id : 8778685881328738661,
			broadcast_post : 84,
		),
		$client->updateReadChannelDiscussionOutbox(
			channel_id : -4018181329951449320,
			top_msg_id : 15,
			read_max_id : 51,
		),
		$client->updatePeerBlocked(
			blocked : true,
			blocked_my_stories_from : true,
			peer_id : $client->peerUser(
				user_id : 9031709981480466415,
			),
		),
		$client->updateChannelUserTyping(
			channel_id : -7342691527574095431,
			top_msg_id : 13,
			from_id : $client->peerUser(
				user_id : 570625207256632639,
			),
			action : $client->sendMessageTypingAction(),
		),
		$client->updatePinnedMessages(
			pinned : true,
			peer : $client->peerUser(
				user_id : -2263826829163926460,
			),
			messages : array(77),
			pts : 4,
			pts_count : 84,
		),
		$client->updatePinnedChannelMessages(
			pinned : true,
			channel_id : -7985543445331011808,
			messages : array(32),
			pts : 94,
			pts_count : 55,
		),
		$client->updateChat(
			chat_id : 4967581733449647067,
		),
		$client->updateGroupCallParticipants(
			call : $client->inputGroupCall(
				id : 3242910901656123205,
				access_hash : -2971872403114770334,
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
						user_id : -7339849364141332073,
					),
					date : 74,
					active_date : 97,
					source : 2,
					volume : 96,
					about : 'amzD9486Ej3sg1uN',
					raise_hand_rating : 1118801504909281752,
					video : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'K2v0gwGUSAnobyCl',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 26,
					),
					presentation : $client->groupCallParticipantVideo(
						paused : true,
						endpoint : 'p0AzZ5tXNET7FkL9',
						source_groups : array(
							$client->groupCallParticipantVideoSourceGroup(...),
						),
						audio_source : 57,
					),
					paid_stars_total : 4927224074508601323,
				),
			),
			version : 90,
		),
		$client->updateGroupCall(
			live_story : true,
			peer : $client->peerUser(
				user_id : 4032176521348150641,
			),
			call : $client->groupCallDiscarded(
				id : -8738219726568892645,
				access_hash : -5850707645795168505,
				duration : 68,
			),
		),
		$client->updatePeerHistoryTTL(
			peer : $client->peerUser(
				user_id : -2739932823073309101,
			),
			ttl_period : 58,
		),
		$client->updateChatParticipant(
			chat_id : 3486209062829627808,
			date : 30,
			actor_id : 8987064036084202015,
			user_id : -7969433617758905941,
			prev_participant : $client->chatParticipant(
				user_id : -3734333235943066343,
				inviter_id : 4979462000491649429,
				date : 73,
			),
			new_participant : $client->chatParticipant(
				user_id : 4730798456548866927,
				inviter_id : -3219309937461156354,
				date : 1,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'nJ7YbGE4f1s6Px9Z',
				admin_id : 3510997676539648695,
				date : 36,
				start_date : 16,
				expire_date : 6,
				usage_limit : 2,
				usage : 60,
				requested : 62,
				subscription_expired : 39,
				title : '6v5cGIWs1eTOpdaC',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 50,
					amount : 433372135005732076,
				),
			),
			qts : 28,
		),
		$client->updateChannelParticipant(
			via_chatlist : true,
			channel_id : 1225736382167963213,
			date : 78,
			actor_id : 6812803169437843570,
			user_id : -501463665133228121,
			prev_participant : $client->channelParticipant(
				user_id : -8772973094329819900,
				date : 55,
				subscription_until_date : 75,
			),
			new_participant : $client->channelParticipant(
				user_id : 6653252094771717245,
				date : 44,
				subscription_until_date : 38,
			),
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'qeajCyVoKZW1RwDL',
				admin_id : -8839439066967365553,
				date : 73,
				start_date : 20,
				expire_date : 88,
				usage_limit : 1,
				usage : 87,
				requested : 41,
				subscription_expired : 100,
				title : 'jur52WNqX9kJ3tZE',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 45,
					amount : 9166862299221785598,
				),
			),
			qts : 83,
		),
		$client->updateBotStopped(
			user_id : 1421274485122023963,
			date : 49,
			stopped : true,
			qts : 61,
		),
		$client->updateGroupCallConnection(
			presentation : true,
			params : $client->dataJSON(
				data : 'WPJSdnHjv7hQlqo8',
			),
		),
		$client->updateBotCommands(
			peer : $client->peerUser(
				user_id : 6510112914751571323,
			),
			bot_id : -6555861282987662583,
			commands : array(
				$client->botCommand(
					command : '1lE5ZOSvcPr2k68I',
					description : 'yTUzMPhXHWZYmQcp',
				),
			),
		),
		$client->updatePendingJoinRequests(
			peer : $client->peerUser(
				user_id : 4396026110237133922,
			),
			requests_pending : 59,
			recent_requesters : array(7658646700315158488),
		),
		$client->updateBotChatInviteRequester(
			peer : $client->peerUser(
				user_id : 2437857476970894653,
			),
			date : 52,
			user_id : -5753845439314988244,
			about : 'dwgvlemkZyLrJtCX',
			invite : $client->chatInviteExported(
				revoked : true,
				permanent : true,
				request_needed : true,
				link : 'TX8O4g7Imxl5a6Vi',
				admin_id : 4345250849993992741,
				date : 78,
				start_date : 78,
				expire_date : 60,
				usage_limit : 37,
				usage : 22,
				requested : 1,
				subscription_expired : 37,
				title : 'KGzNRyDuITkP2Vc1',
				subscription_pricing : $client->starsSubscriptionPricing(
					period : 80,
					amount : -5829714102554150455,
				),
			),
			qts : 66,
		),
		$client->updateMessageReactions(
			peer : $client->peerUser(
				user_id : 3003598886525068177,
			),
			msg_id : 5,
			top_msg_id : 85,
			saved_peer_id : $client->peerUser(
				user_id : 5705767810204669227,
			),
			reactions : $client->messageReactions(
				min : true,
				can_see_list : true,
				reactions_as_tags : true,
				results : array(
					$client->reactionCount(
						chosen_order : 73,
						reaction : $client->reactionEmpty(...),
						count : 67,
					),
				),
				recent_reactions : array(
					$client->messagePeerReaction(
						big : true,
						unread : true,
						my : true,
						peer_id : $client->peerUser(...),
						date : 7,
						reaction : $client->reactionEmpty(...),
					),
				),
				top_reactors : array(
					$client->messageReactor(
						top : true,
						my : true,
						anonymous : true,
						peer_id : $client->peerUser(...),
						count : 18,
					),
				),
			),
		),
		$client->updateAttachMenuBots(),
		$client->updateWebViewResultSent(
			query_id : -6634401557930979161,
		),
		$client->updateBotMenuButton(
			bot_id : -3577674066009204910,
			button : $client->botMenuButtonDefault(),
		),
		$client->updateSavedRingtones(),
		$client->updateTranscribedAudio(
			pending : true,
			peer : $client->peerUser(
				user_id : -5377450689961955365,
			),
			msg_id : 77,
			transcription_id : 5447477252770792674,
			text : 'GyD02QM3UhEdRkej',
		),
		$client->updateReadFeaturedEmojiStickers(),
		$client->updateUserEmojiStatus(
			user_id : 8951389337745070384,
			emoji_status : $client->emojiStatusEmpty(),
		),
		$client->updateRecentEmojiStatuses(),
		$client->updateRecentReactions(),
		$client->updateMoveStickerSetToTop(
			masks : true,
			emojis : true,
			stickerset : -2733483744270204632,
		),
		$client->updateMessageExtendedMedia(
			peer : $client->peerUser(
				user_id : 7718587245567860758,
			),
			msg_id : 81,
			extended_media : array(
				$client->messageExtendedMediaPreview(
					w : 33,
					h : 73,
					thumb : $client->photoSizeEmpty(
						type : 'WPKDL53m2JwasnMg',
					),
					video_duration : 44,
				),
				$client->messageExtendedMedia(
					media : $client->messageMediaEmpty(),
				),
			),
		),
		$client->updateUser(
			user_id : -2263210158995593767,
		),
		$client->updateAutoSaveSettings(),
		$client->updateStory(
			peer : $client->peerUser(
				user_id : 8788080274056168438,
			),
			story : $client->storyItemDeleted(
				id : 91,
			),
		),
		$client->updateReadStories(
			peer : $client->peerUser(
				user_id : -6249977557274920627,
			),
			max_id : 14,
		),
		$client->updateStoryID(
			id : 38,
			random_id : -7601549477500987466,
		),
		$client->updateStoriesStealthMode(
			stealth_mode : $client->storiesStealthMode(
				active_until_date : 97,
				cooldown_until_date : 13,
			),
		),
		$client->updateSentStoryReaction(
			peer : $client->peerUser(
				user_id : -6844981718253469260,
			),
			story_id : 42,
			reaction : $client->reactionEmpty(),
		),
		$client->updateBotChatBoost(
			peer : $client->peerUser(
				user_id : -4082641960553282238,
			),
			boost : $client->boost(
				gift : true,
				giveaway : true,
				unclaimed : true,
				id : 'JgjkoX6cw5YraM1l',
				user_id : -2312945109831313929,
				giveaway_msg_id : 79,
				date : 80,
				expires : 9,
				used_gift_slug : 'CGAuRXrIBY0U2eKN',
				multiplier : 69,
				stars : 3373499167312473183,
			),
			qts : 15,
		),
		$client->updateChannelViewForumAsMessages(
			channel_id : -4601478005412650892,
			enabled : true,
		),
		$client->updatePeerWallpaper(
			wallpaper_overridden : true,
			peer : $client->peerUser(
				user_id : 8097416790478193533,
			),
			wallpaper : $client->wallPaper(
				id : -3998349506274290735,
				creator : true,
				default : true,
				pattern : true,
				dark : true,
				access_hash : 5392944126093466572,
				slug : 'Id3FPYcJu9S8ytNo',
				document : $client->documentEmpty(
					id : -3169737449365166399,
				),
				settings : $client->wallPaperSettings(
					blur : true,
					motion : true,
					background_color : 62,
					second_background_color : 72,
					third_background_color : 93,
					fourth_background_color : 51,
					intensity : 67,
					rotation : 78,
					emoticon : 'x6h5SbzMvEDrRw4L',
				),
			),
		),
		$client->updateBotMessageReaction(
			peer : $client->peerUser(
				user_id : 1431714961236472265,
			),
			msg_id : 93,
			date : 79,
			actor : $client->peerUser(
				user_id : -8341054647996270172,
			),
			old_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'ENCsFhncZUoaQGRj',
				),
				$client->reactionCustomEmoji(
					document_id : 4173525618566807023,
				),
				$client->reactionPaid(),
			),
			new_reactions : array(
				$client->reactionEmpty(),
				$client->reactionEmoji(
					emoticon : 'gjFf6PRqnAEKYxmr',
				),
				$client->reactionCustomEmoji(
					document_id : 2731971242237966117,
				),
				$client->reactionPaid(),
			),
			qts : 49,
		),
		$client->updateBotMessageReactions(
			peer : $client->peerUser(
				user_id : -3378017708410873685,
			),
			msg_id : 56,
			date : 25,
			reactions : array(
				$client->reactionCount(
					chosen_order : 91,
					reaction : $client->reactionEmpty(),
					count : 22,
				),
			),
			qts : 62,
		),
		$client->updateSavedDialogPinned(
			pinned : true,
			peer : $client->dialogPeer(
				peer : $client->peerUser(
					user_id : -6090866631734723347,
				),
			),
		),
		$client->updatePinnedSavedDialogs(
			order : array(
				$client->dialogPeer(
					peer : $client->peerUser(
						user_id : -7498115772550353411,
					),
				),
				$client->dialogPeerFolder(
					folder_id : 95,
				),
			),
		),
		$client->updateSavedReactionTags(),
		$client->updateSmsJob(
			job_id : 'A8RdVxOZUEoP0prg',
		),
		$client->updateQuickReplies(
			quick_replies : array(
				$client->quickReply(
					shortcut_id : 35,
					shortcut : 'JL92SQBcDyiYqOfE',
					top_message : 46,
					count : 12,
				),
			),
		),
		$client->updateNewQuickReply(
			quick_reply : $client->quickReply(
				shortcut_id : 15,
				shortcut : 'rV2l3cR0pjqMPKnJ',
				top_message : 93,
				count : 90,
			),
		),
		$client->updateDeleteQuickReply(
			shortcut_id : 91,
		),
		$client->updateQuickReplyMessage(
			message : $client->messageEmpty(
				id : 89,
				peer_id : $client->peerUser(
					user_id : -2231685442952882508,
				),
			),
		),
		$client->updateDeleteQuickReplyMessages(
			shortcut_id : 73,
			messages : array(8),
		),
		$client->updateBotBusinessConnect(
			connection : $client->botBusinessConnection(
				disabled : true,
				connection_id : 'PSBklxs9wh6jMgmt',
				user_id : 3394488382139002031,
				dc_id : 78,
				date : 76,
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
			qts : 19,
		),
		$client->updateBotNewBusinessMessage(
			connection_id : 'LdCilh4G8xeFEMfV',
			message : $client->messageEmpty(
				id : 67,
				peer_id : $client->peerUser(
					user_id : -7753138022402177012,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 52,
				peer_id : $client->peerUser(
					user_id : 1169628433294551861,
				),
			),
			qts : 23,
		),
		$client->updateBotEditBusinessMessage(
			connection_id : 'QAJIsnlVofT48Od7',
			message : $client->messageEmpty(
				id : 90,
				peer_id : $client->peerUser(
					user_id : 6070690829347903048,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 71,
				peer_id : $client->peerUser(
					user_id : 4004117653225248154,
				),
			),
			qts : 64,
		),
		$client->updateBotDeleteBusinessMessage(
			connection_id : 'IiBgOhv71ZN8A43d',
			peer : $client->peerUser(
				user_id : 6224013576878055909,
			),
			messages : array(100),
			qts : 0,
		),
		$client->updateNewStoryReaction(
			story_id : 46,
			peer : $client->peerUser(
				user_id : 2379564769707737015,
			),
			reaction : $client->reactionEmpty(),
		),
		$client->updateStarsBalance(
			balance : $client->starsAmount(
				amount : 3669961320686216004,
				nanos : 5,
			),
		),
		$client->updateBusinessBotCallbackQuery(
			query_id : -6319972048231129788,
			user_id : 7346864746771144649,
			connection_id : 'IMr5QRFxGKcXDaSy',
			message : $client->messageEmpty(
				id : 61,
				peer_id : $client->peerUser(
					user_id : 7070867257992844090,
				),
			),
			reply_to_message : $client->messageEmpty(
				id : 28,
				peer_id : $client->peerUser(
					user_id : 8217224204504969865,
				),
			),
			chat_instance : 8754984240473388827,
			data : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updateStarsRevenueStatus(
			peer : $client->peerUser(
				user_id : -1947523276159945473,
			),
			status : $client->starsRevenueStatus(
				withdrawal_enabled : true,
				current_balance : $client->starsAmount(
					amount : 2297514214397176199,
					nanos : 58,
				),
				available_balance : $client->starsAmount(
					amount : 7867111831634427506,
					nanos : 42,
				),
				overall_revenue : $client->starsAmount(
					amount : 3330451968103051041,
					nanos : 29,
				),
				next_withdrawal_at : 24,
			),
		),
		$client->updateBotPurchasedPaidMedia(
			user_id : -6726211223160618614,
			payload : 'UT7S3E8zwPxHfCrQ',
			qts : 96,
		),
		$client->updatePaidReactionPrivacy(
			private : $client->paidReactionPrivacyDefault(),
		),
		$client->updateSentPhoneCode(
			sent_code : $client->auth->sentCode(
				type : $client->auth->sentCodeTypeApp(
					length : 4,
				),
				phone_code_hash : '+1234567890',
				next_type : $client->auth->codeTypeSms(),
				timeout : 17,
			),
		),
		$client->updateGroupCallChainBlocks(
			call : $client->inputGroupCall(
				id : -7143239991182867128,
				access_hash : -7959869915607283415,
			),
			sub_chain_id : 80,
			blocks : array("\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f"),
			next_offset : 35,
		),
		$client->updateReadMonoForumInbox(
			channel_id : 7130186862702873695,
			saved_peer_id : $client->peerUser(
				user_id : -4254490849774471054,
			),
			read_max_id : 59,
		),
		$client->updateReadMonoForumOutbox(
			channel_id : -283644367387440744,
			saved_peer_id : $client->peerUser(
				user_id : 1351254930882785852,
			),
			read_max_id : 89,
		),
		$client->updateMonoForumNoPaidException(
			exception : true,
			channel_id : 7571875612012170170,
			saved_peer_id : $client->peerUser(
				user_id : -5527535376094287723,
			),
		),
		$client->updateGroupCallMessage(
			call : $client->inputGroupCall(
				id : -780623235350073889,
				access_hash : 5550305056290316382,
			),
			message : $client->groupCallMessage(
				from_admin : true,
				id : 0,
				from_id : $client->peerUser(
					user_id : 2348495579656379680,
				),
				date : 45,
				message : $client->textWithEntities(
					text : '6XVFc8jrNSmfnQqv',
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
					),
				),
				paid_message_stars : -744831948129765213,
			),
		),
		$client->updateGroupCallEncryptedMessage(
			call : $client->inputGroupCall(
				id : -435644639295371782,
				access_hash : -7082084683148816876,
			),
			from_id : $client->peerUser(
				user_id : 5129016268147243816,
			),
			encrypted_message : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
		),
		$client->updatePinnedForumTopic(
			pinned : true,
			peer : $client->peerUser(
				user_id : 5788139465642525739,
			),
			topic_id : 74,
		),
		$client->updatePinnedForumTopics(
			peer : $client->peerUser(
				user_id : -7847103892661009128,
			),
			order : array(45),
		),
		$client->updateDeleteGroupCallMessages(
			call : $client->inputGroupCall(
				id : 3510196208093258440,
				access_hash : 7177914033737110300,
			),
			messages : array(7),
		),
		$client->updateStarGiftAuctionState(
			gift_id : 7520542438059382889,
			state : $client->starGiftAuctionState(
				version : 75,
				start_date : 22,
				end_date : 96,
				min_bid_amount : -8253444912940894834,
				bid_levels : array(
					$client->auctionBidLevel(
						pos : 8,
						amount : -6195796693372823780,
						date : 11,
					),
				),
				top_bidders : array(-1286741091779856282),
				next_round_at : 73,
				gifts_left : 81,
				current_round : 84,
				total_rounds : 56,
			),
		),
		$client->updateTranscribeAudio(
			final : true,
			transcription_id : -1848196495163122607,
			text : 'atAfsq1pN3OHzQZD',
		),
		$client->updateBotSubscriptionExpire(
			user_id : -2558206015492389413,
			payload : 'oihz4rY1dGAELnsm',
			until_date : 31,
			qts : 99,
		),
		$client->updateStarGiftAuctionUserState(
			gift_id : -6503167420122717068,
			user_state : $client->starGiftAuctionUserState(
				returned : true,
				bid_amount : -383540554874555478,
				bid_date : 79,
				min_bid_amount : 4842585510034604613,
				peer : $client->peerUser(
					user_id : 6267102254869507516,
				),
				acquired_count : 9,
			),
		),
	),
	users : array(
		$client->userEmpty(
			id : 6561828399708072447,
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
			id : -414736971113250244,
			access_hash : 4632778394058983839,
			first_name : 'Tak',
			last_name : 'None',
			username : 'TakNone',
			phone : '+1234567890',
			photo : $client->userProfilePhotoEmpty(),
			status : $client->userStatusEmpty(),
			bot_info_version : 99,
			restriction_reason : array(
				$client->restrictionReason(
					platform : '14myZgdAGXOpjVJr',
					reason : 'BtgsKUlSPHaiAVuR',
					text : 'w0hlLfSIxMZ4JHYv',
				),
			),
			bot_inline_placeholder : 'ST9g4hxEZByqCjMv',
			lang_code : 'mBtHiNulkDo2PwWR',
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
				max_id : 57,
			),
			color : $client->peerColor(
				color : 73,
				background_emoji_id : 5923777712871462628,
			),
			profile_color : $client->peerColor(
				color : 53,
				background_emoji_id : -2555732757165983268,
			),
			bot_active_users : 91,
			bot_verification_icon : 1620460458885313390,
			send_paid_messages_stars : 8102881356829996288,
		),
	),
	chats : array(
		$client->chatEmpty(
			id : -753097118409682342,
		),
		$client->chat(
			creator : true,
			kicked : true,
			left : true,
			deactivated : true,
			call_active : true,
			call_not_empty : true,
			noforwards : true,
			id : 7155593826305027097,
			title : 'JGpVm1Y8M9rUNZHc',
			photo : $client->chatPhotoEmpty(),
			participants_count : 94,
			date : 7,
			version : 77,
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
		),
		$client->chatForbidden(
			id : 2403732497803400126,
			title : 'Z0DCcgTt6WNEReKr',
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
			id : -7822786688841207938,
			access_hash : -3777513384345346527,
			title : 'PGAOQ8mMxfbCNd5Y',
			username : 'TakNone',
			photo : $client->chatPhotoEmpty(),
			date : 17,
			restriction_reason : array(
				$client->restrictionReason(
					platform : 'Iv0cQNG6XwKpfsUy',
					reason : 'bH8IiJkgzCDmQ5su',
					text : 'cY8ZAmXus139tzNy',
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
				until_date : 34,
			),
			participants_count : 78,
			usernames : array(
				$client->username(
					editable : true,
					active : true,
					username : 'TakNone',
				),
			),
			stories_max_id : $client->recentStory(
				live : true,
				max_id : 4,
			),
			color : $client->peerColor(
				color : 58,
				background_emoji_id : -451742665537911812,
			),
			profile_color : $client->peerColor(
				color : 96,
				background_emoji_id : -1621244449765076860,
			),
			emoji_status : $client->emojiStatusEmpty(),
			level : 26,
			subscription_until_date : 73,
			bot_verification_icon : 181504174627087885,
			send_paid_messages_stars : 5956593192619444693,
			linked_monoforum_id : -1375731111248415850,
		),
		$client->channelForbidden(
			broadcast : true,
			megagroup : true,
			id : 8919527137284578586,
			access_hash : -8349340489192978770,
			title : 'xidUhHf2Q5C0u9ez',
			until_date : 84,
		),
	),
	date : 11,
	seq : 17,
);
```